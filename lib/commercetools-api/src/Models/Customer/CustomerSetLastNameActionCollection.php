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
 * @extends MapperSequence<CustomerSetLastNameAction>
 * @method CustomerSetLastNameAction current()
 * @method CustomerSetLastNameAction at($offset)
 */
class CustomerSetLastNameActionCollection extends MapperSequence
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
        return function (int $index): ?CustomerSetLastNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetLastNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
