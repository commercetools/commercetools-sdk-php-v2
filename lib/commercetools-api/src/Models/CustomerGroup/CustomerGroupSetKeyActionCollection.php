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
 * @extends CustomerGroupUpdateActionCollection<CustomerGroupSetKeyAction>
 * @method CustomerGroupSetKeyAction current()
 * @method CustomerGroupSetKeyAction at($offset)
 */
class CustomerGroupSetKeyActionCollection extends CustomerGroupUpdateActionCollection
{
    /**
     * @psalm-assert CustomerGroupSetKeyAction $value
     * @psalm-param CustomerGroupSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupSetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerGroupSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupSetKeyAction $data */
                $data = CustomerGroupSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
