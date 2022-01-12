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
 * @extends PaymentUpdateActionCollection<PaymentSetTransactionCustomTypeAction>
 * @method PaymentSetTransactionCustomTypeAction current()
 * @method PaymentSetTransactionCustomTypeAction end()
 * @method PaymentSetTransactionCustomTypeAction at($offset)
 */
class PaymentSetTransactionCustomTypeActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetTransactionCustomTypeAction $value
     * @psalm-param PaymentSetTransactionCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetTransactionCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetTransactionCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetTransactionCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetTransactionCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetTransactionCustomTypeAction $data */
                $data = PaymentSetTransactionCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
