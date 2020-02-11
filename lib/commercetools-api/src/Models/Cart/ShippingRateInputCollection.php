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
 * @extends MapperSequence<ShippingRateInput>
 * @method ShippingRateInput current()
 * @method ShippingRateInput at($offset)
 */
class ShippingRateInputCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingRateInput $value
     * @psalm-param ShippingRateInput|stdClass $value
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
     * @psalm-return callable(int):?ShippingRateInput
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingRateInput {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingRateInputModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
