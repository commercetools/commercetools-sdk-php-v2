<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Payment\PaymentUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends PaymentUpdateActionCollection<PaymentSetAmountRefundedAction>
 * @method PaymentSetAmountRefundedAction current()
 * @method PaymentSetAmountRefundedAction at($offset)
 */
class PaymentSetAmountRefundedActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetAmountRefundedAction $value
     * @psalm-param PaymentSetAmountRefundedAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetAmountRefundedActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetAmountRefundedAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetAmountRefundedAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetAmountRefundedAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetAmountRefundedAction $data */
                $data = PaymentSetAmountRefundedActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
