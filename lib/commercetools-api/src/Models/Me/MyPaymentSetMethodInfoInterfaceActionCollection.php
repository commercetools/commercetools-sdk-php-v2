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
 * @extends MapperSequence<MyPaymentSetMethodInfoInterfaceAction>
 *
 * @method MyPaymentSetMethodInfoInterfaceAction current()
 * @method MyPaymentSetMethodInfoInterfaceAction at($offset)
 */
class MyPaymentSetMethodInfoInterfaceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyPaymentSetMethodInfoInterfaceAction $value
     * @psalm-param MyPaymentSetMethodInfoInterfaceAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyPaymentSetMethodInfoInterfaceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentSetMethodInfoInterfaceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentSetMethodInfoInterfaceAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyPaymentSetMethodInfoInterfaceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyPaymentSetMethodInfoInterfaceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
