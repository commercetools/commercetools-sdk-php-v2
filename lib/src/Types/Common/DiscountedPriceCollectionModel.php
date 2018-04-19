<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class DiscountedPriceCollectionModel extends JsonCollection implements DiscountedPriceCollection
{

    /**
     * @param DiscountedPrice $value
     * @return DiscountedPriceCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountedPrice) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountedPrice
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountedPrice) {
            $data = $this->mapData(DiscountedPrice::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
