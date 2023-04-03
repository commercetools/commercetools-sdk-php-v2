<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLInvalidFieldErrorModel extends JsonObjectModel implements GraphQLInvalidFieldError
{
    public const DISCRIMINATOR_VALUE = 'InvalidField';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $field;

    /**
     *
     * @var ?mixed
     */
    protected $invalidValue;

    /**
     *
     * @var ?array
     */
    protected $allowedValues;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        $invalidValue = null,
        ?array $allowedValues = null,
        ?string $code = null
    ) {
        $this->field = $field;
        $this->invalidValue = $invalidValue;
        $this->allowedValues = $allowedValues;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>Name of the field with the invalid value.</p>
     *
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
     * <p>Value invalid for the field.</p>
     *
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
     * <p>Fixed set of allowed values for the field, if any.</p>
     *
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
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
