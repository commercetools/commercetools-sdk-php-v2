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
 * @extends ShippingRatePriceTierCollection<CartScoreTier>
 * @method CartScoreTier current()
 * @method CartScoreTier end()
 * @method CartScoreTier at($offset)
 */
class CartScoreTierCollection extends ShippingRatePriceTierCollection
{
    /**
     * @psalm-assert CartScoreTier $value
     * @psalm-param CartScoreTier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartScoreTierCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartScoreTier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartScoreTier
     */
    protected function mapper()
    {
        return function (?int $index): ?CartScoreTier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartScoreTier $data */
                $data = CartScoreTierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
