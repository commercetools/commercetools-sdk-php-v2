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
 * @extends CustomerUpdateActionCollection<CustomerSetMiddleNameAction>
 * @method CustomerSetMiddleNameAction current()
 * @method CustomerSetMiddleNameAction at($offset)
 */
class CustomerSetMiddleNameActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetMiddleNameAction $value
     * @psalm-param CustomerSetMiddleNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetMiddleNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetMiddleNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetMiddleNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetMiddleNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetMiddleNameAction $data */
                $data = CustomerSetMiddleNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
