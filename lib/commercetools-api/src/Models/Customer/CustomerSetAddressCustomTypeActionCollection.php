<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Customer\CustomerUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CustomerUpdateActionCollection<CustomerSetAddressCustomTypeAction>
 * @method CustomerSetAddressCustomTypeAction current()
 * @method CustomerSetAddressCustomTypeAction end()
 * @method CustomerSetAddressCustomTypeAction at($offset)
 */
class CustomerSetAddressCustomTypeActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetAddressCustomTypeAction $value
     * @psalm-param CustomerSetAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetAddressCustomTypeAction $data */
                $data = CustomerSetAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
