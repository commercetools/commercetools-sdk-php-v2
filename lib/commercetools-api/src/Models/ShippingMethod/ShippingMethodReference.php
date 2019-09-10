<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Reference;

interface ShippingMethodReference extends Reference
{
    
    const FIELD_OBJ = 'obj';

    /**
     *
     * @return ShippingMethod|null
     */
    public function getObj();
    public function setObj(?ShippingMethod $obj): void;
}