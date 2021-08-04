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
 * @extends CustomerUpdateActionCollection<CustomerSetStoresAction>
 * @method CustomerSetStoresAction current()
 * @method CustomerSetStoresAction at($offset)
 */
class CustomerSetStoresActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetStoresAction $value
     * @psalm-param CustomerSetStoresAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetStoresActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetStoresAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetStoresAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetStoresAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetStoresAction $data */
                $data = CustomerSetStoresActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
