<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingRateInputType>
 * @method ShippingRateInputType current()
 * @method ShippingRateInputType at($offset)
 */
class ShippingRateInputTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingRateInputType $value
     * @psalm-param ShippingRateInputType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingRateInputTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingRateInputType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingRateInputType
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingRateInputType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingRateInputTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
