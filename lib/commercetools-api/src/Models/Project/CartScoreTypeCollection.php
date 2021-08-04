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
 * @extends ShippingRateInputTypeCollection<CartScoreType>
 * @method CartScoreType current()
 * @method CartScoreType at($offset)
 */
class CartScoreTypeCollection extends ShippingRateInputTypeCollection
{
    /**
     * @psalm-assert CartScoreType $value
     * @psalm-param CartScoreType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartScoreTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartScoreType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartScoreType
     */
    protected function mapper()
    {
        return function (?int $index): ?CartScoreType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartScoreType $data */
                $data = CartScoreTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
