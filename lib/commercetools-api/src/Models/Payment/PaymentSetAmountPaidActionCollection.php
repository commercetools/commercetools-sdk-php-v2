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
 * @extends MapperSequence<PaymentSetAmountPaidAction>
 *
 * @method PaymentSetAmountPaidAction current()
 * @method PaymentSetAmountPaidAction at($offset)
 */
class PaymentSetAmountPaidActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentSetAmountPaidAction $value
     * @psalm-param PaymentSetAmountPaidAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentSetAmountPaidActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetAmountPaidAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetAmountPaidAction
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentSetAmountPaidAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentSetAmountPaidActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
