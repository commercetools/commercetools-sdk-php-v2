<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class ShippingMethodReferenceModel extends ReferenceModel implements ShippingMethodReference {
    const DISCRIMINATOR_VALUE = 'shipping-method';

    /**
     * @var ShippingMethod
     */
    protected $obj;

    /**
     * @return ShippingMethod
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(ShippingMethodReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(ShippingMethod::class, null);
            }
            $value = $this->mapData(ShippingMethod::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param ShippingMethod $obj
     * @return $this
     */
    public function setObj(ShippingMethod $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
