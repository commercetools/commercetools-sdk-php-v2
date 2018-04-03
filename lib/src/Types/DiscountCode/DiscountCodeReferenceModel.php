<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class DiscountCodeReferenceModel extends ReferenceModel implements DiscountCodeReference {
    const DISCRIMINATOR_VALUE = 'discount-code';

    /**
     * @var DiscountCode
     */
    protected $obj;

    /**
     * @return DiscountCode
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(DiscountCodeReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(DiscountCode::class, null);
            }
            $value = $this->mapData(DiscountCode::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param DiscountCode $obj
     * @return $this
     */
    public function setObj(DiscountCode $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
