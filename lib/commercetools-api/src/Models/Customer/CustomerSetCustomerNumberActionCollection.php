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
 * @extends MapperSequence<CustomerSetCustomerNumberAction>
 *
 * @method CustomerSetCustomerNumberAction current()
 * @method CustomerSetCustomerNumberAction at($offset)
 */
class CustomerSetCustomerNumberActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetCustomerNumberAction $value
     * @psalm-param CustomerSetCustomerNumberAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerSetCustomerNumberActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetCustomerNumberAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetCustomerNumberAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetCustomerNumberAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetCustomerNumberActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
