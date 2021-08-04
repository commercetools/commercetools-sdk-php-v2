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
 * @extends PaymentUpdateActionCollection<PaymentSetKeyAction>
 * @method PaymentSetKeyAction current()
 * @method PaymentSetKeyAction end()
 * @method PaymentSetKeyAction at($offset)
 */
class PaymentSetKeyActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetKeyAction $value
     * @psalm-param PaymentSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetKeyAction $data */
                $data = PaymentSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
