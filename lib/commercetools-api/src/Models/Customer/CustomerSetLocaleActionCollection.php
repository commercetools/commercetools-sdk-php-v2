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
 * @extends CustomerUpdateActionCollection<CustomerSetLocaleAction>
 * @method CustomerSetLocaleAction current()
 * @method CustomerSetLocaleAction at($offset)
 */
class CustomerSetLocaleActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetLocaleAction $value
     * @psalm-param CustomerSetLocaleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetLocaleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetLocaleAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetLocaleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetLocaleAction $data */
                $data = CustomerSetLocaleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
