<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\Common\Reference;

interface ShippingMethodReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return ShippingMethod
     */
    public function getObj();

    /**
     * @param ShippingMethod $obj
     * @return $this
     */
    public function setObj(ShippingMethod $obj);

}
