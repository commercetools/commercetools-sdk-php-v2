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
 * @implements Builder<DuplicateFieldError>
 */
final class DuplicateFieldErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?JsonObject
     */
    private $duplicateValue;

    /**
     * @var ?string
     */
    private $field;

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
     * <p>The offending duplicate value.</p>.
     *
     * @return null|JsonObject
     */
    public function getDuplicateValue()
    {
        return $this->duplicateValue;
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
    public function withDuplicateValue(?JsonObject $duplicateValue)
    {
        $this->duplicateValue = $duplicateValue;

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

    public function build(): DuplicateFieldError
    {
        return new DuplicateFieldErrorModel(
            $this->message,
            $this->duplicateValue,
            $this->field
        );
    }

    public static function of(): DuplicateFieldErrorBuilder
    {
        return new self();
    }
}
