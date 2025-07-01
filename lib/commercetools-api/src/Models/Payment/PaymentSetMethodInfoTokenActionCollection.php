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
 * @extends PaymentUpdateActionCollection<PaymentSetMethodInfoTokenAction>
 * @method PaymentSetMethodInfoTokenAction current()
 * @method PaymentSetMethodInfoTokenAction end()
 * @method PaymentSetMethodInfoTokenAction at($offset)
 */
class PaymentSetMethodInfoTokenActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetMethodInfoTokenAction $value
     * @psalm-param PaymentSetMethodInfoTokenAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetMethodInfoTokenActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetMethodInfoTokenAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetMethodInfoTokenAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetMethodInfoTokenAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetMethodInfoTokenAction $data */
                $data = PaymentSetMethodInfoTokenActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
