<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class ProductTypeReferenceModel extends ReferenceModel implements ProductTypeReference {
    const DISCRIMINATOR_VALUE = 'product-type';

    /**
     * @var ProductType
     */
    protected $obj;

    /**
     * @return ProductType
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(ProductTypeReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(ProductType::class, null);
            }
            $value = $this->mapData(ProductType::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param ProductType $obj
     * @return $this
     */
    public function setObj(ProductType $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
