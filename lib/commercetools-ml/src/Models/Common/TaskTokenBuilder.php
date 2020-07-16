<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaskToken>
 */
final class TaskTokenBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $taskId;

    /**
     * @var ?string
     */
    private $uriPath;

    /**
     * <p>The ID for the task. Used to find the status of the task.</p>
     *
     * @return null|string
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * <p>The URI path to poll for the status of the task.</p>
     *
     * @return null|string
     */
    public function getUriPath()
    {
        return $this->uriPath;
    }

    /**
     * @param ?string $taskId
     * @return $this
     */
    public function withTaskId(?string $taskId)
    {
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * @param ?string $uriPath
     * @return $this
     */
    public function withUriPath(?string $uriPath)
    {
        $this->uriPath = $uriPath;

        return $this;
    }


    public function build(): TaskToken
    {
        return new TaskTokenModel(
            $this->taskId,
            $this->uriPath
        );
    }

    public static function of(): TaskTokenBuilder
    {
        return new self();
    }
}
