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
 * @extends CustomerUpdateActionCollection<CustomerChangeAddressAction>
 * @method CustomerChangeAddressAction current()
 * @method CustomerChangeAddressAction end()
 * @method CustomerChangeAddressAction at($offset)
 */
class CustomerChangeAddressActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerChangeAddressAction $value
     * @psalm-param CustomerChangeAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerChangeAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerChangeAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerChangeAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerChangeAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerChangeAddressAction $data */
                $data = CustomerChangeAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
