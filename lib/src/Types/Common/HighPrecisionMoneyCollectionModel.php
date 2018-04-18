<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types\Common\TypedMoneyCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class HighPrecisionMoneyCollectionModel extends TypedMoneyCollectionModel implements HighPrecisionMoneyCollection {

    /**
     * @param HighPrecisionMoney $value
     * @return HighPrecisionMoneyCollection
     */
    public function add($value) {
        if (!$value instanceof HighPrecisionMoney) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return HighPrecisionMoney
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof HighPrecisionMoney) {
            $data = $this->mapData(HighPrecisionMoney::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
