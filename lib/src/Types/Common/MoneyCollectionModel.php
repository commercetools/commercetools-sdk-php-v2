<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonCollection;

class MoneyCollectionModel extends JsonCollection implements MoneyCollection {

    /**
     * @param Money $value
     * @return MoneyCollection
     */
    public function add($value) {
        if (!$value instanceof Money) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Money
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Money) {
            $data = $this->mapData(Money::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
