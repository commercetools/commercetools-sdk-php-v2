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
 * @extends PaymentUpdateActionCollection<PaymentSetTransactionInterfaceIdAction>
 * @method PaymentSetTransactionInterfaceIdAction current()
 * @method PaymentSetTransactionInterfaceIdAction end()
 * @method PaymentSetTransactionInterfaceIdAction at($offset)
 */
class PaymentSetTransactionInterfaceIdActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetTransactionInterfaceIdAction $value
     * @psalm-param PaymentSetTransactionInterfaceIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetTransactionInterfaceIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetTransactionInterfaceIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetTransactionInterfaceIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetTransactionInterfaceIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetTransactionInterfaceIdAction $data */
                $data = PaymentSetTransactionInterfaceIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
