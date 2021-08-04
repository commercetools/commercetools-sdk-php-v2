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
 * @extends CustomerUpdateActionCollection<CustomerSetVatIdAction>
 * @method CustomerSetVatIdAction current()
 * @method CustomerSetVatIdAction at($offset)
 */
class CustomerSetVatIdActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetVatIdAction $value
     * @psalm-param CustomerSetVatIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetVatIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetVatIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetVatIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetVatIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetVatIdAction $data */
                $data = CustomerSetVatIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
