<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InvalidFieldErrorModel extends JsonObjectModel implements InvalidFieldError
{
    public const DISCRIMINATOR_VALUE = 'InvalidField';
    /**

     * @var ?string
     */
    protected $code;

    /**

     * @var ?string
     */
    protected $message;

    /**

     * @var ?string
     */
    protected $field;

    /**

     * @var ?mixed
     */
    protected $invalidValue;

    /**

     * @var ?array
     */
    protected $allowedValues;

    /**

     * @var ?int
     */
    protected $resourceIndex;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?string $field = null,
        $invalidValue = null,
        ?array $allowedValues = null,
        ?int $resourceIndex = null
    ) {
        $this->message = $message;
        $this->field = $field;
        $this->invalidValue = $invalidValue;
        $this->allowedValues = $allowedValues;
        $this->resourceIndex = $resourceIndex;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
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
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p>The name of the field.</p>
     *

     * @return null|string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD);
            if (is_null($data)) {
                return null;
            }
            $this->field = (string) $data;
        }

        return $this->field;
    }

    /**
     * <p>The invalid value.</p>
     *

     * @return null|mixed
     */
    public function getInvalidValue()
    {
        if (is_null($this->invalidValue)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_INVALID_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->invalidValue = $data;
        }

        return $this->invalidValue;
    }

    /**
     * <p>The set of allowed values for the field, if any.</p>
     *

     * @return null|array
     */
    public function getAllowedValues()
    {
        if (is_null($this->allowedValues)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ALLOWED_VALUES);
            if (is_null($data)) {
                return null;
            }
            $this->allowedValues = $data;
        }

        return $this->allowedValues;
    }

    /**

     * @return null|int
     */
    public function getResourceIndex()
    {
        if (is_null($this->resourceIndex)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RESOURCE_INDEX);
            if (is_null($data)) {
                return null;
            }
            $this->resourceIndex = (int) $data;
        }

        return $this->resourceIndex;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * @param mixed $invalidValue
     */
    public function setInvalidValue($invalidValue): void
    {
        $this->invalidValue = $invalidValue;
    }

    /**
     * @param ?array $allowedValues
     */
    public function setAllowedValues(?array $allowedValues): void
    {
        $this->allowedValues = $allowedValues;
    }

    /**
     * @param ?int $resourceIndex
     */
    public function setResourceIndex(?int $resourceIndex): void
    {
        $this->resourceIndex = $resourceIndex;
    }
}
