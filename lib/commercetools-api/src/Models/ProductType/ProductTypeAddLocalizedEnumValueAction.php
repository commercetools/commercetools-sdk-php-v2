<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;

interface ProductTypeAddLocalizedEnumValueAction extends ProductTypeUpdateAction
{
    
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_VALUE = 'value';

    /**
     *
     * @return string|null
     */
    public function getAttributeName();
    
    /**
     *
     * @return AttributeLocalizedEnumValue|null
     */
    public function getValue();
    public function setAttributeName(?string $attributeName): void;
    
    public function setValue(?AttributeLocalizedEnumValue $value): void;
}