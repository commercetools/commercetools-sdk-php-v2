<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeSetType extends AttributeType
{
    public const FIELD_ELEMENT_TYPE = 'elementType';

    /**
     * <p>Attribute type of the elements in the set.</p>
     *
     * @return null|AttributeType
     */
    public function getElementType();

    /**
     * @param ?AttributeType $elementType
     */
    public function setElementType(?AttributeType $elementType): void;
}
