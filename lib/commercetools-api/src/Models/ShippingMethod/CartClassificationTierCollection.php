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
 * @extends ShippingRatePriceTierCollection<CartClassificationTier>
 * @method CartClassificationTier current()
 * @method CartClassificationTier at($offset)
 */
class CartClassificationTierCollection extends ShippingRatePriceTierCollection
{
    /**
     * @psalm-assert CartClassificationTier $value
     * @psalm-param CartClassificationTier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartClassificationTierCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartClassificationTier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartClassificationTier
     */
    protected function mapper()
    {
        return function (?int $index): ?CartClassificationTier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartClassificationTier $data */
                $data = CartClassificationTierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
