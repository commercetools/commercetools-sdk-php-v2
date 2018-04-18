<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountValueCollectionModel extends JsonCollection implements ProductDiscountValueCollection {

    /**
     * @param ProductDiscountValue $value
     * @return ProductDiscountValueCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountValue) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountValue
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountValue) {
            $resolvedClass = $this->resolveDiscriminator(ProductDiscountValue::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
