<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DuplicateFieldError>
 */
final class DuplicateFieldErrorBuilder implements Builder
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
    private $duplicateValue;

    /**
     * <p>The error's description.</p>
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>The name of the field.</p>
     *
     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <p>The offending duplicate value.</p>
     *
     * @return null|JsonObject
     */
    public function getDuplicateValue()
    {
        return $this->duplicateValue;
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
    public function withDuplicateValue(?JsonObject $duplicateValue)
    {
        $this->duplicateValue = $duplicateValue;

        return $this;
    }


    public function build(): DuplicateFieldError
    {
        return new DuplicateFieldErrorModel(
            $this->message,
            $this->field,
            $this->duplicateValue
        );
    }

    public static function of(): DuplicateFieldErrorBuilder
    {
        return new self();
    }
}
