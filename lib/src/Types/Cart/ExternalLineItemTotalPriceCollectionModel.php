<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ExternalLineItemTotalPriceCollectionModel extends JsonCollection implements ExternalLineItemTotalPriceCollection
{

    /**
     * @param ExternalLineItemTotalPrice $value
     * @return ExternalLineItemTotalPriceCollection
     */
    public function add($value) {
        if (!$value instanceof ExternalLineItemTotalPrice) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ExternalLineItemTotalPrice
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ExternalLineItemTotalPrice) {
            $data = $this->mapData(ExternalLineItemTotalPrice::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
