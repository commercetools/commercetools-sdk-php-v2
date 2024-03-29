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
 * @extends CustomerUpdateActionCollection<CustomerSetLastNameAction>
 * @method CustomerSetLastNameAction current()
 * @method CustomerSetLastNameAction end()
 * @method CustomerSetLastNameAction at($offset)
 */
class CustomerSetLastNameActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetLastNameAction $value
     * @psalm-param CustomerSetLastNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetLastNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetLastNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetLastNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetLastNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetLastNameAction $data */
                $data = CustomerSetLastNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
