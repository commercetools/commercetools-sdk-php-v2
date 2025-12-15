<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ShippingMethodChangeActiveChange>
 * @method ShippingMethodChangeActiveChange current()
 * @method ShippingMethodChangeActiveChange end()
 * @method ShippingMethodChangeActiveChange at($offset)
 */
class ShippingMethodChangeActiveChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodChangeActiveChange $value
     * @psalm-param ShippingMethodChangeActiveChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodChangeActiveChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodChangeActiveChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodChangeActiveChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodChangeActiveChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodChangeActiveChange $data */
                $data = ShippingMethodChangeActiveChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
