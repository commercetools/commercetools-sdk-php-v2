<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerSetDefaultShippingAddressAction>
 *
 * @method CustomerSetDefaultShippingAddressAction current()
 * @method CustomerSetDefaultShippingAddressAction at($offset)
 */
class CustomerSetDefaultShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetDefaultShippingAddressAction $value
     * @psalm-param CustomerSetDefaultShippingAddressAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerSetDefaultShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetDefaultShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetDefaultShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetDefaultShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetDefaultShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
