<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


/**
 * @internal
 */
final class TaskTokenModel extends JsonObjectModel implements TaskToken
{

    /**
     * @var ?string
     */
    protected $taskId;

    /**
     * @var ?string
     */
    protected $uriPath;


    public function __construct(
        string $taskId = null,
        string $uriPath = null
    ) {
        $this->taskId = $taskId;
        $this->uriPath = $uriPath;

    }

    /**
     * <p>The ID for the task. Used to find the status of the task.</p>
     *
     * @return null|string
     */
    public function getTaskId()
    {
        if (is_null($this->taskId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaskToken::FIELD_TASK_ID);
            if (is_null($data)) {
                return null;
            }
            $this->taskId = (string) $data;
        }

        return $this->taskId;
    }

    /**
     * <p>The URI path to poll for the status of the task.</p>
     *
     * @return null|string
     */
    public function getUriPath()
    {
        if (is_null($this->uriPath)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(TaskToken::FIELD_URI_PATH);
            if (is_null($data)) {
                return null;
            }
            $this->uriPath = (string) $data;
        }

        return $this->uriPath;
    }

    public function setTaskId(?string $taskId): void
    {
        $this->taskId = $taskId;
    }

    public function setUriPath(?string $uriPath): void
    {
        $this->uriPath = $uriPath;
    }



}
