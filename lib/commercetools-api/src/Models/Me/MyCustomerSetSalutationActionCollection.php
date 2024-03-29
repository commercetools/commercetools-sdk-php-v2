<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCustomerUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCustomerUpdateActionCollection<MyCustomerSetSalutationAction>
 * @method MyCustomerSetSalutationAction current()
 * @method MyCustomerSetSalutationAction end()
 * @method MyCustomerSetSalutationAction at($offset)
 */
class MyCustomerSetSalutationActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerSetSalutationAction $value
     * @psalm-param MyCustomerSetSalutationAction|stdClass $value
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
        return function (?int $index): ?MyCustomerSetSalutationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerSetSalutationAction $data */
                $data = MyCustomerSetSalutationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
