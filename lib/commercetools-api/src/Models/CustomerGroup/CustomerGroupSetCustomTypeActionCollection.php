<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CustomerGroupUpdateActionCollection<CustomerGroupSetCustomTypeAction>
 * @method CustomerGroupSetCustomTypeAction current()
 * @method CustomerGroupSetCustomTypeAction at($offset)
 */
class CustomerGroupSetCustomTypeActionCollection extends CustomerGroupUpdateActionCollection
{
    /**
     * @psalm-assert CustomerGroupSetCustomTypeAction $value
     * @psalm-param CustomerGroupSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerGroupSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupSetCustomTypeAction $data */
                $data = CustomerGroupSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
