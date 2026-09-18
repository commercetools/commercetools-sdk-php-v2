<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Warning\WarningObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentFileNotProcessedWarning extends WarningObject
{
    public const FIELD_FILE_NAME = 'fileName';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Plain text description of why the file could not be parsed.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Name of the file that failed to parse.</p>
     *

     * @return null|string
     */
    public function getFileName();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $fileName
     */
    public function setFileName(?string $fileName): void;
}
