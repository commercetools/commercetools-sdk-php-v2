<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeNestedType extends AttributeType
{
    public const FIELD_TYPE_REFERENCE = 'typeReference';

    /**
     * <p>Attributes that can be stored as nested Attributes of the current Attribute.</p>
     *
     * @return null|ProductTypeReference
     */
    public function getTypeReference();

    /**
     * @param ?ProductTypeReference $typeReference
     */
    public function setTypeReference(?ProductTypeReference $typeReference): void;
}
