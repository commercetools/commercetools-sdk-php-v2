<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Project\ShippingRateInputTypeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ShippingRateInputTypeCollection<CartValueType>
 * @method CartValueType current()
 * @method CartValueType end()
 * @method CartValueType at($offset)
 */
class CartValueTypeCollection extends ShippingRateInputTypeCollection
{
    /**
     * @psalm-assert CartValueType $value
     * @psalm-param CartValueType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartValueTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartValueType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartValueType
     */
    protected function mapper()
    {
        return function (?int $index): ?CartValueType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartValueType $data */
                $data = CartValueTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
