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
 * @extends MapperSequence<MyCustomerSetCustomTypeAction>
 *
 * @method MyCustomerSetCustomTypeAction current()
 * @method MyCustomerSetCustomTypeAction at($offset)
 */
class MyCustomerSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerSetCustomTypeAction $value
     * @psalm-param MyCustomerSetCustomTypeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
