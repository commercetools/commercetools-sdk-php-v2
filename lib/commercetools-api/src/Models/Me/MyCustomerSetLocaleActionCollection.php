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
 * @extends MapperSequence<MyCustomerSetLocaleAction>
 *
 * @method MyCustomerSetLocaleAction current()
 * @method MyCustomerSetLocaleAction at($offset)
 */
class MyCustomerSetLocaleActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerSetLocaleAction $value
     * @psalm-param MyCustomerSetLocaleAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetLocaleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetLocaleAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetLocaleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerSetLocaleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
