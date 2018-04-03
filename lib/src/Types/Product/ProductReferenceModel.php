<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class ProductReferenceModel extends ReferenceModel implements ProductReference {
    const DISCRIMINATOR_VALUE = 'product';

    /**
     * @var Product
     */
    protected $obj;

    /**
     * @return Product
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(ProductReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(Product::class, null);
            }
            $value = $this->mapData(Product::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param Product $obj
     * @return $this
     */
    public function setObj(Product $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
