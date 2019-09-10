<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;

interface ProductTypeChangeAttributeOrderByNameAction extends ProductTypeUpdateAction
{
    
    const FIELD_ATTRIBUTE_NAMES = 'attributeNames';

    /**
     *
     * @return array|null
     */
    public function getAttributeNames();
    public function setAttributeNames(?array $attributeNames): void;
}