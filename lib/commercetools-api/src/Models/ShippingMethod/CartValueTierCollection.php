<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\ShippingMethod\ShippingRatePriceTierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ShippingRatePriceTierCollection<CartValueTier>
 * @method CartValueTier current()
 * @method CartValueTier at($offset)
 */
class CartValueTierCollection extends ShippingRatePriceTierCollection
{
    /**
     * @psalm-assert CartValueTier $value
     * @psalm-param CartValueTier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartValueTierCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartValueTier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartValueTier
     */
    protected function mapper()
    {
        return function (?int $index): ?CartValueTier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartValueTier $data */
                $data = CartValueTierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
