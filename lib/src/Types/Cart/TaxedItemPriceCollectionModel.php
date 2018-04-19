<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class TaxedItemPriceCollectionModel extends JsonCollection implements TaxedItemPriceCollection
{

    /**
     * @param TaxedItemPrice $value
     * @return TaxedItemPriceCollection
     */
    public function add($value) {
        if (!$value instanceof TaxedItemPrice) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxedItemPrice
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxedItemPrice) {
            $data = $this->mapData(TaxedItemPrice::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
