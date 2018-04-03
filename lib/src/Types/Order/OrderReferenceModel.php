<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class OrderReferenceModel extends ReferenceModel implements OrderReference {
    const DISCRIMINATOR_VALUE = 'order';

    /**
     * @var Order
     */
    protected $obj;

    /**
     * @return Order
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(OrderReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(Order::class, null);
            }
            $value = $this->mapData(Order::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param Order $obj
     * @return $this
     */
    public function setObj(Order $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
