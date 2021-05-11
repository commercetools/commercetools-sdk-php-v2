<?php

declare(strict_types=1);

namespace Commercetools\Tools;

use Symplify\EasyCodingStandard\Configuration\Configuration;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\Contract\Console\Output\OutputFormatterInterface;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector;
use Symplify\EasyCodingStandard\ValueObject\Error\ErrorAndDiffResult;
use Symplify\PackageBuilder\Console\ShellCode;

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

    /**
     * @var Configuration
     */
    private $configuration;

    /**
     * @var ErrorAndDiffCollector
     */
    private $errorAndDiffCollector;

    public function __construct(
        EasyCodingStandardStyle $easyCodingStandardStyle,
        Configuration $configuration,
        ErrorAndDiffCollector $errorAndDiffCollector
    ) {
        $this->easyCodingStandardStyle = $easyCodingStandardStyle;
        $this->configuration = $configuration;
        $errorAndDiffResult = $errorAndDiffCollector;
    }

    public function report(ErrorAndDiffResult $errorAndDiffResult, $processedFilesCount): int
    {
        if ($errorAndDiffResult->getErrorCount() === 0
            && $errorAndDiffResult->getFileDiffsCount() === 0
        ) {
            if ($processedFilesCount !== 0) {
                $this->easyCodingStandardStyle->newLine();
            }

            $this->easyCodingStandardStyle->success('No errors found. Great job - your code is shiny in style!');

            return ShellCode::SUCCESS;
        }

        $this->easyCodingStandardStyle->newLine();

        return $this->configuration->isFixer() ? $this->printAfterFixerStatus($errorAndDiffResult) : $this->printNoFixerStatus($errorAndDiffResult);
    }

    public function getName(): string
    {
        return self::NAME;
    }

    private function printAfterFixerStatus(ErrorAndDiffResult $errorAndDiffResult): int
    {
        if ($this->configuration->shouldShowErrorTable()) {
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

            return ShellCode::SUCCESS;
        }

        $this->printErrorMessageFromErrorCounts(
            $errorAndDiffResult->getErrorCount(),
            $errorAndDiffResult->getFileDiffsCount()
        );

        return ShellCode::ERROR;
    }

    private function printNoFixerStatus(ErrorAndDiffResult $errorAndDiffResult): int
    {
        if ($this->configuration->shouldShowErrorTable()) {
            $errors = $errorAndDiffResult->getErrors();
            if (count($errors) > 0) {
                $this->easyCodingStandardStyle->newLine();
                $this->easyCodingStandardStyle->printErrors($errors);
            }
        }

        $this->printErrorMessageFromErrorCounts(
            $errorAndDiffResult->getErrorCount(),
            $errorAndDiffResult->getFileDiffsCount()
        );

        return ShellCode::ERROR;
    }

    private function printErrorMessageFromErrorCounts(int $errorCount, int $fileDiffsCount): void
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

        if (! $fileDiffsCount || $this->configuration->isFixer()) {
            return;
        }

        $this->easyCodingStandardStyle->fixableError(
            sprintf(
                '%s%d %s fixable! Just add "--fix" to console command and rerun to apply.',
                $errorCount !== 0 ? 'Good news is that ' : '',
                $fileDiffsCount,
                $fileDiffsCount === 1 ? 'file is' : 'files are'
            )
        );
    }
}
