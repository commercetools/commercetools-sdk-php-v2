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
     * @return null|AttributeType
     */
    public function getElementType();

    public function setElementType(?AttributeType $elementType): void;
}
