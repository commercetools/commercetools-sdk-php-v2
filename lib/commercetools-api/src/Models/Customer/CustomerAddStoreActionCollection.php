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
 * @extends CustomerUpdateActionCollection<CustomerAddStoreAction>
 * @method CustomerAddStoreAction current()
 * @method CustomerAddStoreAction at($offset)
 */
class CustomerAddStoreActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerAddStoreAction $value
     * @psalm-param CustomerAddStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddStoreAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerAddStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddStoreAction $data */
                $data = CustomerAddStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
