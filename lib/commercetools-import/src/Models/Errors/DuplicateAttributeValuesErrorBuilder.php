<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

/**
 * @implements Builder<DuplicateAttributeValuesError>
 */
final class DuplicateAttributeValuesErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?AttributeCollection
     */
    private $attributes;

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
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
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
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function build(): DuplicateAttributeValuesError
    {
        return new DuplicateAttributeValuesErrorModel(
            $this->message,
            $this->attributes
        );
    }

    public static function of(): DuplicateAttributeValuesErrorBuilder
    {
        return new self();
    }
}
