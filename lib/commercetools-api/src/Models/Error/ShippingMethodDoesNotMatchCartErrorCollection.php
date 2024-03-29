<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<ShippingMethodDoesNotMatchCartError>
 * @method ShippingMethodDoesNotMatchCartError current()
 * @method ShippingMethodDoesNotMatchCartError end()
 * @method ShippingMethodDoesNotMatchCartError at($offset)
 */
class ShippingMethodDoesNotMatchCartErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ShippingMethodDoesNotMatchCartError $value
     * @psalm-param ShippingMethodDoesNotMatchCartError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodDoesNotMatchCartErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodDoesNotMatchCartError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodDoesNotMatchCartError
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodDoesNotMatchCartError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodDoesNotMatchCartError $data */
                $data = ShippingMethodDoesNotMatchCartErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
