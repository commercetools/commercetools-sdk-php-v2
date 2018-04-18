<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types\Common\TypedMoneyCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CentPrecisionMoneyCollectionModel extends TypedMoneyCollectionModel implements CentPrecisionMoneyCollection {

    /**
     * @param CentPrecisionMoney $value
     * @return CentPrecisionMoneyCollection
     */
    public function add($value) {
        if (!$value instanceof CentPrecisionMoney) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CentPrecisionMoney
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CentPrecisionMoney) {
            $data = $this->mapData(CentPrecisionMoney::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
