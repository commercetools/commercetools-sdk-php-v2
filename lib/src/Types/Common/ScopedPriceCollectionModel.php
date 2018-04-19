<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ScopedPriceCollectionModel extends JsonCollection implements ScopedPriceCollection
{

    /**
     * @param ScopedPrice $value
     * @return ScopedPriceCollection
     */
    public function add($value) {
        if (!$value instanceof ScopedPrice) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ScopedPrice
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ScopedPrice) {
            $data = $this->mapData(ScopedPrice::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
