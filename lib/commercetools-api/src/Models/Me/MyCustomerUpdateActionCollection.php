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
 * @extends MapperSequence<MyCustomerUpdateAction>
 *
 * @method MyCustomerUpdateAction current()
 * @method MyCustomerUpdateAction at($offset)
 */
class MyCustomerUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerUpdateAction $value
     * @psalm-param MyCustomerUpdateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
