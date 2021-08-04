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
 * @extends ChangeCollection<AddItemShippingAddressesChange>
 * @method AddItemShippingAddressesChange current()
 * @method AddItemShippingAddressesChange end()
 * @method AddItemShippingAddressesChange at($offset)
 */
class AddItemShippingAddressesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddItemShippingAddressesChange $value
     * @psalm-param AddItemShippingAddressesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddItemShippingAddressesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddItemShippingAddressesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddItemShippingAddressesChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddItemShippingAddressesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddItemShippingAddressesChange $data */
                $data = AddItemShippingAddressesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
