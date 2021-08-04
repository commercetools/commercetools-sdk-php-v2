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
 * @extends CustomerGroupUpdateActionCollection<CustomerGroupSetCustomFieldAction>
 * @method CustomerGroupSetCustomFieldAction current()
 * @method CustomerGroupSetCustomFieldAction end()
 * @method CustomerGroupSetCustomFieldAction at($offset)
 */
class CustomerGroupSetCustomFieldActionCollection extends CustomerGroupUpdateActionCollection
{
    /**
     * @psalm-assert CustomerGroupSetCustomFieldAction $value
     * @psalm-param CustomerGroupSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupSetCustomFieldAction $data */
                $data = CustomerGroupSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
