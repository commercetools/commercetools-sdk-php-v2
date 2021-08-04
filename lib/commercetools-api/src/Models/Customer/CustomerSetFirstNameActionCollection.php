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
 * @extends CustomerUpdateActionCollection<CustomerSetFirstNameAction>
 * @method CustomerSetFirstNameAction current()
 * @method CustomerSetFirstNameAction end()
 * @method CustomerSetFirstNameAction at($offset)
 */
class CustomerSetFirstNameActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetFirstNameAction $value
     * @psalm-param CustomerSetFirstNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetFirstNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetFirstNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetFirstNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetFirstNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetFirstNameAction $data */
                $data = CustomerSetFirstNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
