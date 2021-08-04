<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customers;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerAddress>
 * @method CustomerAddress current()
 * @method CustomerAddress end()
 * @method CustomerAddress at($offset)
 */
class CustomerAddressCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerAddress $value
     * @psalm-param CustomerAddress|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddress) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddress
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddress {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddress $data */
                $data = CustomerAddressModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
