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
 * @extends MapperSequence<MyPaymentSetMethodInfoMethodAction>
 *
 * @method MyPaymentSetMethodInfoMethodAction current()
 * @method MyPaymentSetMethodInfoMethodAction at($offset)
 */
class MyPaymentSetMethodInfoMethodActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyPaymentSetMethodInfoMethodAction $value
     * @psalm-param MyPaymentSetMethodInfoMethodAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyPaymentSetMethodInfoMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentSetMethodInfoMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentSetMethodInfoMethodAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyPaymentSetMethodInfoMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyPaymentSetMethodInfoMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
