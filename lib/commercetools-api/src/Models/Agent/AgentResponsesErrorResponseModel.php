<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AgentResponsesErrorResponseModel extends JsonObjectModel implements AgentResponsesErrorResponse
{
    /**
     *
     * @var ?int
     */
    protected $statusCode;

    /**
     *
     * @var ?string
     */
    protected $message;

    /**
     *
     * @var ?ErrorObjectCollection
     */
    protected $errors;

    /**
     *
     * @var ?string
     */
    protected $threadId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $statusCode = null,
        ?string $message = null,
        ?ErrorObjectCollection $errors = null,
        ?string $threadId = null
    ) {
        $this->statusCode = $statusCode;
        $this->message = $message;
        $this->errors = $errors;
        $this->threadId = $threadId;
    }

    /**
     * <p>HTTP status code corresponding to the error.</p>
     *
     *
     * @return null|int
     */
    public function getStatusCode()
    {
        if (is_null($this->statusCode)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_STATUS_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->statusCode = (int) $data;
        }

        return $this->statusCode;
    }

    /**
     * <p>First error message in the <code>errors</code> array.</p>
     *
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p>Errors returned for a request.</p>
     * <p>A single error response can contain multiple errors if the errors are related to the same HTTP status code such as <code>400</code>.</p>
     *
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->errors = ErrorObjectCollection::fromArray($data);
        }

        return $this->errors;
    }

    /**
     * <p>Identifier of the workflow run that raised the error. Present on errors raised once the workflow has started. Absent on errors raised while parsing the request, before the workflow starts.</p>
     *
     *
     * @return null|string
     */
    public function getThreadId()
    {
        if (is_null($this->threadId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_THREAD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->threadId = (string) $data;
        }

        return $this->threadId;
    }


    /**
     * @param ?int $statusCode
     */
    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * @param ?string $threadId
     */
    public function setThreadId(?string $threadId): void
    {
        $this->threadId = $threadId;
    }
}
