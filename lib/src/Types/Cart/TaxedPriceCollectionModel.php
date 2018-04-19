<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class TaxedPriceCollectionModel extends JsonCollection implements TaxedPriceCollection
{

    /**
     * @param TaxedPrice $value
     * @return TaxedPriceCollection
     */
    public function add($value) {
        if (!$value instanceof TaxedPrice) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxedPrice
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxedPrice) {
            $data = $this->mapData(TaxedPrice::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
