<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentSetInterfaceIdAction>
 *
 * @method PaymentSetInterfaceIdAction current()
 * @method PaymentSetInterfaceIdAction at($offset)
 */
class PaymentSetInterfaceIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentSetInterfaceIdAction $value
     * @psalm-param PaymentSetInterfaceIdAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentSetInterfaceIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetInterfaceIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetInterfaceIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentSetInterfaceIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentSetInterfaceIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
