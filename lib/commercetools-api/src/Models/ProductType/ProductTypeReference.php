<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Reference;

interface ProductTypeReference extends Reference
{
    
    const FIELD_OBJ = 'obj';

    /**
     *
     * @return ProductType|null
     */
    public function getObj();
    public function setObj(?ProductType $obj): void;
}