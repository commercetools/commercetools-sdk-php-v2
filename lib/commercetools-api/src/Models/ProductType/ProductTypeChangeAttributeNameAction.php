<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;

interface ProductTypeChangeAttributeNameAction extends ProductTypeUpdateAction
{
    
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_NEW_ATTRIBUTE_NAME = 'newAttributeName';

    /**
     *
     * @return string|null
     */
    public function getAttributeName();
    
    /**
     *
     * @return string|null
     */
    public function getNewAttributeName();
    public function setAttributeName(?string $attributeName): void;
    
    public function setNewAttributeName(?string $newAttributeName): void;
}