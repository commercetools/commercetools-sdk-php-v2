<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartClassificationTier>
 *
 * @method CartClassificationTier current()
 * @method CartClassificationTier at($offset)
 */
class CartClassificationTierCollection extends MapperSequence
{
    /**
     * @psalm-assert CartClassificationTier $value
     * @psalm-param CartClassificationTier|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?CartClassificationTier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartClassificationTierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
