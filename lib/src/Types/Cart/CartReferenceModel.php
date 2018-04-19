<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class CartReferenceModel extends ReferenceModel implements CartReference
{
    const DISCRIMINATOR_VALUE = 'cart';

    /**
     * @var Cart
     */
    protected $obj;

    /**
     * @return Cart
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(CartReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(Cart::class, null);
            }
            $value = $this->mapData(Cart::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param Cart $obj
     * @return $this
     */
    public function setObj(Cart $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
