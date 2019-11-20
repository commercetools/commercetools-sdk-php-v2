<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

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
     * @var ?array
     */
    private $allowedValues;

    /**
     * @var ?string
     */
    private $field;

    /**
     * @var ?JsonObject
     */
    private $invalidValue;

    /**
     * <p>The error's description.</p>.
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>A fixed set of allowed values for the field, if any.</p>.
     *
     * @return null|array
     */
    public function getAllowedValues()
    {
        return $this->allowedValues;
    }

    /**
     * <p>The name of the field.</p>.
     *
     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <p>The invalid value.</p>.
     *
     * @return null|JsonObject
     */
    public function getInvalidValue()
    {
        return $this->invalidValue;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAllowedValues(?array $allowedValues)
    {
        $this->allowedValues = $allowedValues;

        return $this;
    }

    /**
     * @return $this
     */
    public function withField(?string $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInvalidValue(?JsonObject $invalidValue)
    {
        $this->invalidValue = $invalidValue;

        return $this;
    }

    public function build(): InvalidFieldError
    {
        return new InvalidFieldErrorModel(
            $this->message,
            $this->allowedValues,
            $this->field,
            $this->invalidValue
        );
    }

    public static function of(): InvalidFieldErrorBuilder
    {
        return new self();
    }
}
