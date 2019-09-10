<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerGroupSetCustomTypeAction>
 *
 * @method CustomerGroupSetCustomTypeAction current()
 * @method CustomerGroupSetCustomTypeAction at($offset)
 */
class CustomerGroupSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupSetCustomTypeAction $value
     * @psalm-param CustomerGroupSetCustomTypeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerGroupSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerGroupSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
