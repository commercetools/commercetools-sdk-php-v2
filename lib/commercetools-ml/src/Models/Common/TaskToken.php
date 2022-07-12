<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaskToken extends JsonObject
{
    public const FIELD_TASK_ID = 'taskId';
    public const FIELD_URI_PATH = 'uriPath';

    /**
     * <p>The ID for the task. Used to find the status of the task.</p>
     *

     * @return null|string
     */
    public function getTaskId();

    /**
     * <p>The URI path to poll for the status of the task.</p>
     *

     * @return null|string
     */
    public function getUriPath();

    /**
     * @param ?string $taskId
     */
    public function setTaskId(?string $taskId): void;

    /**
     * @param ?string $uriPath
     */
    public function setUriPath(?string $uriPath): void;
}
