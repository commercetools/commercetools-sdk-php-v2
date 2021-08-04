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
 * @extends CustomerUpdateActionCollection<CustomerSetCustomTypeAction>
 * @method CustomerSetCustomTypeAction current()
 * @method CustomerSetCustomTypeAction end()
 * @method CustomerSetCustomTypeAction at($offset)
 */
class CustomerSetCustomTypeActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetCustomTypeAction $value
     * @psalm-param CustomerSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetCustomTypeAction $data */
                $data = CustomerSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
