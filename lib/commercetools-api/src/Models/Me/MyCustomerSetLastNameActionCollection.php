<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyCustomerSetLastNameAction>
 * @method MyCustomerSetLastNameAction current()
 * @method MyCustomerSetLastNameAction at($offset)
 */
class MyCustomerSetLastNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerSetLastNameAction $value
     * @psalm-param MyCustomerSetLastNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetLastNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetLastNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetLastNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetLastNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerSetLastNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
