<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class PriceCollectionModel extends JsonCollection implements PriceCollection
{

    /**
     * @param Price $value
     * @return PriceCollection
     */
    public function add($value) {
        if (!$value instanceof Price) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Price
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Price) {
            $data = $this->mapData(Price::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
