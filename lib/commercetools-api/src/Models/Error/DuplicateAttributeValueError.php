<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\Attribute;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DuplicateAttributeValueError extends ErrorObject
{
    public const FIELD_ATTRIBUTE = 'attribute';

    /**
     * @return null|Attribute
     */
    public function getAttribute();

    /**
     * @param ?Attribute $attribute
     */
    public function setAttribute(?Attribute $attribute): void;
}
