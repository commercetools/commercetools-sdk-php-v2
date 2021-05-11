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
 * @extends CustomerUpdateActionCollection<CustomerRemoveStoreAction>
 * @method CustomerRemoveStoreAction current()
 * @method CustomerRemoveStoreAction at($offset)
 */
class CustomerRemoveStoreActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerRemoveStoreAction $value
     * @psalm-param CustomerRemoveStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerRemoveStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerRemoveStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerRemoveStoreAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerRemoveStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerRemoveStoreAction $data */
                $data = CustomerRemoveStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
