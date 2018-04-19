<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Common\Reference;

interface OrderReference extends Reference
{
    const FIELD_OBJ = 'obj';

    /**
     * @return Order
     */
    public function getObj();

    /**
     * @param Order $obj
     * @return $this
     */
    public function setObj(Order $obj);

}
