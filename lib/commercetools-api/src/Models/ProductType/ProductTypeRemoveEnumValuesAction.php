<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;

interface ProductTypeRemoveEnumValuesAction extends ProductTypeUpdateAction
{
    
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_KEYS = 'keys';

    /**
     *
     * @return string|null
     */
    public function getAttributeName();
    
    /**
     *
     * @return array|null
     */
    public function getKeys();
    public function setAttributeName(?string $attributeName): void;
    
    public function setKeys(?array $keys): void;
}