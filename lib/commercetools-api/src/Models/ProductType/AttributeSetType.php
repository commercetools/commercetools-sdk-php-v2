<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;

interface AttributeSetType extends AttributeType
{
    
    const FIELD_ELEMENT_TYPE = 'elementType';

    /**
     *
     * @return AttributeType|null
     */
    public function getElementType();
    public function setElementType(?AttributeType $elementType): void;
}