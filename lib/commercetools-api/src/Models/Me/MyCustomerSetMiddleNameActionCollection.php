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
 * @extends MapperSequence<MyCustomerSetMiddleNameAction>
 *
 * @method MyCustomerSetMiddleNameAction current()
 * @method MyCustomerSetMiddleNameAction at($offset)
 */
class MyCustomerSetMiddleNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerSetMiddleNameAction $value
     * @psalm-param MyCustomerSetMiddleNameAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetMiddleNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetMiddleNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetMiddleNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetMiddleNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerSetMiddleNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
