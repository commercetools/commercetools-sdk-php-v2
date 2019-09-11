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
 * @extends MapperSequence<MyCustomerSetSalutationAction>
 *
 * @method MyCustomerSetSalutationAction current()
 * @method MyCustomerSetSalutationAction at($offset)
 */
class MyCustomerSetSalutationActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerSetSalutationAction $value
     * @psalm-param MyCustomerSetSalutationAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetSalutationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetSalutationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetSalutationAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetSalutationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerSetSalutationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
