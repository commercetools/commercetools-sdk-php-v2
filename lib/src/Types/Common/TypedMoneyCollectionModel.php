<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types\Common\MoneyCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypedMoneyCollectionModel extends MoneyCollectionModel implements TypedMoneyCollection
{

    /**
     * @param TypedMoney $value
     * @return TypedMoneyCollection
     */
    public function add($value) {
        if (!$value instanceof TypedMoney) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TypedMoney
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TypedMoney) {
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
