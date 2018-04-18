<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeChangeIsActiveActionCollectionModel extends DiscountCodeUpdateActionCollectionModel implements DiscountCodeChangeIsActiveActionCollection {

    /**
     * @param DiscountCodeChangeIsActiveAction $value
     * @return DiscountCodeChangeIsActiveActionCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeChangeIsActiveAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeChangeIsActiveAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeChangeIsActiveAction) {
            $data = $this->mapData(DiscountCodeChangeIsActiveAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
