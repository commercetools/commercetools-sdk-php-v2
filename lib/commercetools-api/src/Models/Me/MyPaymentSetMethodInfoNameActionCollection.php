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
 * @extends MapperSequence<MyPaymentSetMethodInfoNameAction>
 * @method MyPaymentSetMethodInfoNameAction current()
 * @method MyPaymentSetMethodInfoNameAction at($offset)
 */
class MyPaymentSetMethodInfoNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyPaymentSetMethodInfoNameAction $value
     * @psalm-param MyPaymentSetMethodInfoNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentSetMethodInfoNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentSetMethodInfoNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentSetMethodInfoNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyPaymentSetMethodInfoNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyPaymentSetMethodInfoNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
