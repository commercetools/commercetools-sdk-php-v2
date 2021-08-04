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
 * @extends CustomerUpdateActionCollection<CustomerSetCustomFieldAction>
 * @method CustomerSetCustomFieldAction current()
 * @method CustomerSetCustomFieldAction at($offset)
 */
class CustomerSetCustomFieldActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetCustomFieldAction $value
     * @psalm-param CustomerSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetCustomFieldAction $data */
                $data = CustomerSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
