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
 * @extends MapperSequence<CustomerSetCustomTypeAction>
 *
 * @method CustomerSetCustomTypeAction current()
 * @method CustomerSetCustomTypeAction at($offset)
 */
class CustomerSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetCustomTypeAction $value
     * @psalm-param CustomerSetCustomTypeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
