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
 * @extends MapperSequence<CustomerSetFirstNameAction>
 * @method CustomerSetFirstNameAction current()
 * @method CustomerSetFirstNameAction at($offset)
 */
class CustomerSetFirstNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetFirstNameAction $value
     * @psalm-param CustomerSetFirstNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetFirstNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetFirstNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetFirstNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetFirstNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetFirstNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
