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
 * @extends MapperSequence<MyCustomerSetTitleAction>
 *
 * @method MyCustomerSetTitleAction current()
 * @method MyCustomerSetTitleAction at($offset)
 */
class MyCustomerSetTitleActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerSetTitleAction $value
     * @psalm-param MyCustomerSetTitleAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetTitleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetTitleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetTitleAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetTitleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerSetTitleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
