<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;

class DiscountedLineItemPriceForQuantityCollectionModel extends JsonCollection implements DiscountedLineItemPriceForQuantityCollection {

    /**
     * @param DiscountedLineItemPriceForQuantity $value
     * @return DiscountedLineItemPriceForQuantityCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountedLineItemPriceForQuantity) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountedLineItemPriceForQuantity
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountedLineItemPriceForQuantity) {
            $data = $this->mapData(DiscountedLineItemPriceForQuantity::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
