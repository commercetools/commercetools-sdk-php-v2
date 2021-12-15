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
 * @extends PaymentUpdateActionCollection<PaymentSetTransactionCustomFieldAction>
 * @method PaymentSetTransactionCustomFieldAction current()
 * @method PaymentSetTransactionCustomFieldAction end()
 * @method PaymentSetTransactionCustomFieldAction at($offset)
 */
class PaymentSetTransactionCustomFieldActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetTransactionCustomFieldAction $value
     * @psalm-param PaymentSetTransactionCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetTransactionCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetTransactionCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetTransactionCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetTransactionCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetTransactionCustomFieldAction $data */
                $data = PaymentSetTransactionCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
