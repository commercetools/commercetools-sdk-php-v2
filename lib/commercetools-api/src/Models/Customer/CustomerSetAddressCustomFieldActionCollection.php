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
 * @extends MapperSequence<CustomerSetAddressCustomFieldAction>
 * @method CustomerSetAddressCustomFieldAction current()
 * @method CustomerSetAddressCustomFieldAction at($offset)
 */
class CustomerSetAddressCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetAddressCustomFieldAction $value
     * @psalm-param CustomerSetAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
