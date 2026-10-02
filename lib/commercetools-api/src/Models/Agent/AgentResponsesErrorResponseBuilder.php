<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AgentResponsesErrorResponse>
 */
final class AgentResponsesErrorResponseBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $statusCode;

    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?ErrorObjectCollection
     */
    private $errors;

    /**

     * @var ?string
     */
    private $threadId;

    /**
     * <p>HTTP status code corresponding to the error.</p>
     *

     * @return null|int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * <p>First error message in the <code>errors</code> array.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Errors returned for a request.</p>
     * <p>A single error response can contain multiple errors if the errors are related to the same HTTP status code such as <code>400</code>.</p>
     *

     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * <p>Identifier of the workflow run that raised the error. Present on errors raised once the workflow has started. Absent on errors raised while parsing the request, before the workflow starts.</p>
     *

     * @return null|string
     */
    public function getThreadId()
    {
        return $this->threadId;
    }

    /**
     * @param ?int $statusCode
     * @return $this
     */
    public function withStatusCode(?int $statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
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
     * @param ?ErrorObjectCollection $errors
     * @return $this
     */
    public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * @param ?string $threadId
     * @return $this
     */
    public function withThreadId(?string $threadId)
    {
        $this->threadId = $threadId;

        return $this;
    }


    public function build(): AgentResponsesErrorResponse
    {
        return new AgentResponsesErrorResponseModel(
            $this->statusCode,
            $this->message,
            $this->errors,
            $this->threadId
        );
    }

    public static function of(): AgentResponsesErrorResponseBuilder
    {
        return new self();
    }
}
