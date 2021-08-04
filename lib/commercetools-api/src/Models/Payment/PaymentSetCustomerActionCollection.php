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
 * @extends PaymentUpdateActionCollection<PaymentSetCustomerAction>
 * @method PaymentSetCustomerAction current()
 * @method PaymentSetCustomerAction end()
 * @method PaymentSetCustomerAction at($offset)
 */
class PaymentSetCustomerActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetCustomerAction $value
     * @psalm-param PaymentSetCustomerAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetCustomerActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetCustomerAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetCustomerAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetCustomerAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetCustomerAction $data */
                $data = PaymentSetCustomerActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
