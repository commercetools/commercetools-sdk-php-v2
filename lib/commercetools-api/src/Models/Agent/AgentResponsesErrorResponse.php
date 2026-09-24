<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentResponsesErrorResponse extends ErrorResponse
{
    public const FIELD_THREAD_ID = 'threadId';

    /**
     * <p>Errors returned for a request.</p>
     * <p>A single error response can contain multiple errors if the errors are related to the same HTTP status code such as <code>400</code>.</p>
     *

     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    /**
     * <p>Identifier of the workflow run that raised the error. Present on errors raised once the workflow has started. Absent on errors raised while parsing the request, before the workflow starts.</p>
     *

     * @return null|string
     */
    public function getThreadId();

    /**
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void;

    /**
     * @param ?string $threadId
     */
    public function setThreadId(?string $threadId): void;
}
