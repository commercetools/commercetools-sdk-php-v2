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
 * @extends MapperSequence<CustomerSetCustomerGroupAction>
 * @method CustomerSetCustomerGroupAction current()
 * @method CustomerSetCustomerGroupAction at($offset)
 */
class CustomerSetCustomerGroupActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetCustomerGroupAction $value
     * @psalm-param CustomerSetCustomerGroupAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetCustomerGroupActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetCustomerGroupAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetCustomerGroupAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetCustomerGroupAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetCustomerGroupActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
