<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;

interface ProductTypeChangeInputHintAction extends ProductTypeUpdateAction
{
    
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_NEW_VALUE = 'newValue';

    /**
     *
     * @return string|null
     */
    public function getAttributeName();
    
    /**
     *
     * @return string|null
     */
    public function getNewValue();
    public function setAttributeName(?string $attributeName): void;
    
    public function setNewValue(?string $newValue): void;
}