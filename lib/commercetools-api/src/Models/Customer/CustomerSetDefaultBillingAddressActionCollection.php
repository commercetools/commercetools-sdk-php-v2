<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerSetDefaultBillingAddressAction>
 * @method CustomerSetDefaultBillingAddressAction current()
 * @method CustomerSetDefaultBillingAddressAction at($offset)
 */
class CustomerSetDefaultBillingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetDefaultBillingAddressAction $value
     * @psalm-param CustomerSetDefaultBillingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetDefaultBillingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetDefaultBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetDefaultBillingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetDefaultBillingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetDefaultBillingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
