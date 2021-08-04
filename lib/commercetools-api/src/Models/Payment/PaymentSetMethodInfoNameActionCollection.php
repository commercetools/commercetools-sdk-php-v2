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
 * @extends PaymentUpdateActionCollection<PaymentSetMethodInfoNameAction>
 * @method PaymentSetMethodInfoNameAction current()
 * @method PaymentSetMethodInfoNameAction end()
 * @method PaymentSetMethodInfoNameAction at($offset)
 */
class PaymentSetMethodInfoNameActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetMethodInfoNameAction $value
     * @psalm-param PaymentSetMethodInfoNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetMethodInfoNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetMethodInfoNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetMethodInfoNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetMethodInfoNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetMethodInfoNameAction $data */
                $data = PaymentSetMethodInfoNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
