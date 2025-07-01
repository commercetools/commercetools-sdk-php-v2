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
 * @extends PaymentUpdateActionCollection<PaymentSetMethodInfoAction>
 * @method PaymentSetMethodInfoAction current()
 * @method PaymentSetMethodInfoAction end()
 * @method PaymentSetMethodInfoAction at($offset)
 */
class PaymentSetMethodInfoActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetMethodInfoAction $value
     * @psalm-param PaymentSetMethodInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetMethodInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetMethodInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetMethodInfoAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetMethodInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetMethodInfoAction $data */
                $data = PaymentSetMethodInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
