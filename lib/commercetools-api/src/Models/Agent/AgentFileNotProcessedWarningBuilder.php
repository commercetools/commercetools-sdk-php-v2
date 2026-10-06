<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Warning\WarningObject;
use Commercetools\Api\Models\Warning\WarningObjectBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AgentFileNotProcessedWarning>
 */
final class AgentFileNotProcessedWarningBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?string
     */
    private $fileName;

    /**
     * <p>Plain text description of why the file could not be parsed.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Name of the file that failed to parse.</p>
     *

     * @return null|string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?string $fileName
     * @return $this
     */
    public function withFileName(?string $fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }


    public function build(): AgentFileNotProcessedWarning
    {
        return new AgentFileNotProcessedWarningModel(
            $this->message,
            $this->fileName
        );
    }

    public static function of(): AgentFileNotProcessedWarningBuilder
    {
        return new self();
    }
}
