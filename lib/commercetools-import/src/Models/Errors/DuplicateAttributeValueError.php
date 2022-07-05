<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Productvariants\Attribute;

interface DuplicateAttributeValueError extends ErrorObject
{
    public const FIELD_ATTRIBUTE = 'attribute';

    /**
     * <p>The attribute in conflict.</p>
     *

     * @return null|Attribute
     */
    public function getAttribute();

    /**
     * @param ?Attribute $attribute
     */
    public function setAttribute(?Attribute $attribute): void;
}
