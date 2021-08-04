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
 * @extends PaymentUpdateActionCollection<PaymentSetAmountPaidAction>
 * @method PaymentSetAmountPaidAction current()
 * @method PaymentSetAmountPaidAction end()
 * @method PaymentSetAmountPaidAction at($offset)
 */
class PaymentSetAmountPaidActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetAmountPaidAction $value
     * @psalm-param PaymentSetAmountPaidAction|stdClass $value
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
        return function (?int $index): ?PaymentSetAmountPaidAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetAmountPaidAction $data */
                $data = PaymentSetAmountPaidActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
