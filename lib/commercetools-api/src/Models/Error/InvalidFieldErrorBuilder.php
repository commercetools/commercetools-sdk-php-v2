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
     * @var ?JsonObject
     */
    private $invalidValue;

    /**
     * @var ?array
     */
    private $allowedValues;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return null|JsonObject
     */
    public function getInvalidValue()
    {
        return $this->invalidValue;
    }

    /**
     * @return null|array
     */
    public function getAllowedValues()
    {
        return $this->allowedValues;
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

    /**
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
