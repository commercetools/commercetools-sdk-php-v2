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
 * @extends CustomerUpdateActionCollection<CustomerSetKeyAction>
 * @method CustomerSetKeyAction current()
 * @method CustomerSetKeyAction at($offset)
 */
class CustomerSetKeyActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetKeyAction $value
     * @psalm-param CustomerSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetKeyAction $data */
                $data = CustomerSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
