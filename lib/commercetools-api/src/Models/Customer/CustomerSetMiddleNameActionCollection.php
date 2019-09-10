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
 * @extends MapperSequence<CustomerSetMiddleNameAction>
 *
 * @method CustomerSetMiddleNameAction current()
 * @method CustomerSetMiddleNameAction at($offset)
 */
class CustomerSetMiddleNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetMiddleNameAction $value
     * @psalm-param CustomerSetMiddleNameAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerSetMiddleNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetMiddleNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetMiddleNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSetMiddleNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetMiddleNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
