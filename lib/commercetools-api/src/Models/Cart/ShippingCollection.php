<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Shipping>
 * @method Shipping current()
 * @method Shipping end()
 * @method Shipping at($offset)
 */
class ShippingCollection extends MapperSequence
{
    /**
     * @psalm-assert Shipping $value
     * @psalm-param Shipping|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingCollection
     */
    public function add($value)
    {
        if (!$value instanceof Shipping) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Shipping
     */
    protected function mapper()
    {
        return function (?int $index): ?Shipping {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Shipping $data */
                $data = ShippingModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
