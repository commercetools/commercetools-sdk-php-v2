<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ResourceDeletionErrorModel extends JsonObjectModel implements ResourceDeletionError
{
    const DISCRIMINATOR_VALUE = 'ResourceDeletion';

    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?JsonObject
     */
    protected $resource;

    public function __construct(
        string $code = null,
        string $message = null,
        JsonObject $resource = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->resource = $resource;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|JsonObject
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(ResourceDeletionError::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $this->resource = JsonObjectModel::of($data);
        }

        return $this->resource;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setResource(?JsonObject $resource): void
    {
        $this->resource = $resource;
    }
}
