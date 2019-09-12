<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Import\Models\Productvariants\Attribute;

interface DuplicateAttributeValueError extends ErrorObject
{
    const FIELD_ATTRIBUTE = 'attribute';

    /**
     * <p>This abstract type is the base for specific attribute types. The concrete type is derived
     * from the type discriminator.
     * An attribute matches an attribute definition of a CTP product type by name.
     * The value can have different types, but must match the type of the matching attribute defintion.</p>.
     *
     * @return null|Attribute
     */
    public function getAttribute();

    public function setAttribute(?Attribute $attribute): void;
}
