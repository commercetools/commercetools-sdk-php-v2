<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;

interface ProductTypeChangeNameAction extends ProductTypeUpdateAction
{
    
    const FIELD_NAME = 'name';

    /**
     *
     * @return string|null
     */
    public function getName();
    public function setName(?string $name): void;
}