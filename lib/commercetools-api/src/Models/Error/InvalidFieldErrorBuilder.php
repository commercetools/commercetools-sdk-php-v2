<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InvalidFieldError>
 */
final class InvalidFieldErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?string
     */
    private $field;

    /**

     * @var null|mixed|mixed
     */
    private $invalidValue;

    /**

     * @var ?array
     */
    private $allowedValues;

    /**
     * <p><code>&quot;The value $invalidValue is not valid for field $field.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Name of the field with the invalid value.</p>
     *

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <p>Value invalid for the field.</p>
     *

     * @return null|mixed
     */
    public function getInvalidValue()
    {
        return $this->invalidValue;
    }

    /**
     * <p>Fixed set of allowed values for the field, if any.</p>
     *

     * @return null|array
     */
    public function getAllowedValues()
    {
        return $this->allowedValues;
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
     * @param ?string $field
     * @return $this
     */
    public function withField(?string $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @param mixed $invalidValue
     * @return $this
     */
    public function withInvalidValue($invalidValue)
    {
        $this->invalidValue = $invalidValue;

        return $this;
    }

    /**
     * @param ?array $allowedValues
     * @return $this
     */
    public function withAllowedValues(?array $allowedValues)
    {
        $this->allowedValues = $allowedValues;

        return $this;
    }


    public function build(): InvalidFieldError
    {
        return new InvalidFieldErrorModel(
            $this->message,
            $this->field,
            $this->invalidValue,
            $this->allowedValues
        );
    }

    public static function of(): InvalidFieldErrorBuilder
    {
        return new self();
    }
}
