<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class DiscountedLineItemPriceCollectionModel extends JsonCollection implements DiscountedLineItemPriceCollection
{

    /**
     * @param DiscountedLineItemPrice $value
     * @return DiscountedLineItemPriceCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountedLineItemPrice) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountedLineItemPrice
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountedLineItemPrice) {
            $data = $this->mapData(DiscountedLineItemPrice::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
