<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
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

     * @var null|mixed|mixed
     */
    private $duplicateValue;

    /**

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

     * @return null|mixed
     */
    public function getDuplicateValue()
    {
        return $this->duplicateValue;
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
     * @param mixed $duplicateValue
     * @return $this
     */
    public function withDuplicateValue($duplicateValue)
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
