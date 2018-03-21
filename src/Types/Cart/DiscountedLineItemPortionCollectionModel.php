<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;

class DiscountedLineItemPortionCollectionModel extends JsonCollection implements DiscountedLineItemPortionCollection {

    /**
     * @param DiscountedLineItemPortion $value
     * @return DiscountedLineItemPortionCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountedLineItemPortion) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountedLineItemPortion
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountedLineItemPortion) {
            $data = $this->mapData(DiscountedLineItemPortion::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
