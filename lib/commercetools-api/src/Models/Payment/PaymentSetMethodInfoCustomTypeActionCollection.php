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
 * @extends PaymentUpdateActionCollection<PaymentSetMethodInfoCustomTypeAction>
 * @method PaymentSetMethodInfoCustomTypeAction current()
 * @method PaymentSetMethodInfoCustomTypeAction end()
 * @method PaymentSetMethodInfoCustomTypeAction at($offset)
 */
class PaymentSetMethodInfoCustomTypeActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetMethodInfoCustomTypeAction $value
     * @psalm-param PaymentSetMethodInfoCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetMethodInfoCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetMethodInfoCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetMethodInfoCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetMethodInfoCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetMethodInfoCustomTypeAction $data */
                $data = PaymentSetMethodInfoCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
