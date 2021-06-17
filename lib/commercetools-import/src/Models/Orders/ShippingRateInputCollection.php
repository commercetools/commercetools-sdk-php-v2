<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of ShippingRateInput
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method ShippingRateInput current()
 * @method ShippingRateInput at($offset)
 */
class ShippingRateInputCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingRateInputCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingRateInput) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingRateInput {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ShippingRateInputModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
