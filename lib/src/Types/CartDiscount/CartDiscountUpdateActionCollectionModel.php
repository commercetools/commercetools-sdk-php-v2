<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\UpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountUpdateActionCollectionModel extends UpdateActionCollectionModel implements CartDiscountUpdateActionCollection
{

    /**
     * @param CartDiscountUpdateAction $value
     * @return CartDiscountUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(CartDiscountUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
