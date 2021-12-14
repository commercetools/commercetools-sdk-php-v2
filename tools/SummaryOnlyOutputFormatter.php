<?php

declare(strict_types=1);

namespace Commercetools\Tools;


use Symfony\Component\Console\Command\Command;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\Contract\Console\Output\OutputFormatterInterface;

use Symplify\EasyCodingStandard\ValueObject\Configuration;
use Symplify\EasyCodingStandard\ValueObject\Error\ErrorAndDiffResult;


final class SummaryOnlyOutputFormatter implements OutputFormatterInterface
{
    /**
     * @var string
     */
    public const NAME = 'summaryOnly';

    /**
     * @var EasyCodingStandardStyle
     */
    private $easyCodingStandardStyle;

    public function __construct(
        EasyCodingStandardStyle $easyCodingStandardStyle
    ) {
        $this->easyCodingStandardStyle = $easyCodingStandardStyle;
    }

    /**
     * @param ErrorAndDiffResult $errorAndDiffResult
     * @param Configuration $configuration
     * @return int
     */
    public function report($errorAndDiffResult, $configuration): int
    {
        if ($errorAndDiffResult->getErrorCount() === 0
            && $errorAndDiffResult->getFileDiffsCount() === 0
        ) {
            $this->easyCodingStandardStyle->newLine();

            $this->easyCodingStandardStyle->success('No errors found. Great job - your code is shiny in style!');

            return Command::SUCCESS;
        }

        $this->easyCodingStandardStyle->newLine();

        return $configuration->isFixer() ? $this->printAfterFixerStatus($errorAndDiffResult, $configuration) : $this->printNoFixerStatus($errorAndDiffResult, $configuration);
    }

    public function getName(): string
    {
        return self::NAME;
    }

    private function printAfterFixerStatus(ErrorAndDiffResult $errorAndDiffResult, Configuration $configuration): int
    {
        if ($configuration->shouldShowErrorTable()) {
            $this->easyCodingStandardStyle->printErrors($errorAndDiffResult->getErrors());
        }

        if ($errorAndDiffResult->getErrorCount() === 0) {
            $this->easyCodingStandardStyle->success(
                sprintf(
                    '%d error%s successfully fixed and no other found!',
                    $errorAndDiffResult->getFileDiffsCount(),
                    $errorAndDiffResult->getFileDiffsCount() === 1 ? '' : 's'
                )
            );

            return Command::SUCCESS;
        }

        $this->printErrorMessageFromErrorCounts(
            $configuration,
            $errorAndDiffResult->getErrorCount(),
            $errorAndDiffResult->getFileDiffsCount()
        );

        return Command::FAILURE;
    }

    private function printNoFixerStatus(ErrorAndDiffResult $errorAndDiffResult, Configuration $configuration): int
    {
        if ($configuration->shouldShowErrorTable()) {
            $errors = $errorAndDiffResult->getErrors();
            if (count($errors) > 0) {
                $this->easyCodingStandardStyle->newLine();
                $this->easyCodingStandardStyle->printErrors($errors);
            }
        }

        $this->printErrorMessageFromErrorCounts(
            $configuration,
            $errorAndDiffResult->getErrorCount(),
            $errorAndDiffResult->getFileDiffsCount()
        );

        return Command::FAILURE;
    }

    private function printErrorMessageFromErrorCounts(Configuration $configuration, int $errorCount, int $fileDiffsCount): void
    {
        if ($errorCount !== 0) {
            $this->easyCodingStandardStyle->error(
                sprintf(
                    'Found %d error%s that need%s to be fixed manually.',
                    $errorCount,
                    $errorCount === 1 ? '' : 's',
                    $errorCount === 1 ? '' : 's'
                )
            );
        }

        if (! $fileDiffsCount || $configuration->isFixer()) {
            return;
        }

        $this->easyCodingStandardStyle->error(
            sprintf(
                '%s%d %s fixable! Just add "--fix" to console command and rerun to apply.',
                $errorCount !== 0 ? 'Good news is that ' : '',
                $fileDiffsCount,
                $fileDiffsCount === 1 ? 'file is' : 'files are'
            )
        );
    }
}
