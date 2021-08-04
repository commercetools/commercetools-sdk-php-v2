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
 * @extends CustomerUpdateActionCollection<CustomerChangeEmailAction>
 * @method CustomerChangeEmailAction current()
 * @method CustomerChangeEmailAction at($offset)
 */
class CustomerChangeEmailActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerChangeEmailAction $value
     * @psalm-param CustomerChangeEmailAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerChangeEmailActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerChangeEmailAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerChangeEmailAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerChangeEmailAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerChangeEmailAction $data */
                $data = CustomerChangeEmailActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
