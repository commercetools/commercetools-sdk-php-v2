<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;

interface ProductTypeChangeLocalizedEnumValueOrderAction extends ProductTypeUpdateAction
{
    
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_VALUES = 'values';

    /**
     *
     * @return string|null
     */
    public function getAttributeName();
    
    /**
     *
     * @return AttributeLocalizedEnumValueCollection|null
     */
    public function getValues();
    public function setAttributeName(?string $attributeName): void;
    
    public function setValues(?AttributeLocalizedEnumValueCollection $values): void;
}