<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class ProductDiscountReferenceModel extends ReferenceModel implements ProductDiscountReference
{
    const DISCRIMINATOR_VALUE = 'product-discount';

    /**
     * @var ProductDiscount
     */
    protected $obj;

    /**
     * @return ProductDiscount
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(ProductDiscountReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(ProductDiscount::class, null);
            }
            $value = $this->mapData(ProductDiscount::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param ProductDiscount $obj
     * @return $this
     */
    public function setObj(ProductDiscount $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
