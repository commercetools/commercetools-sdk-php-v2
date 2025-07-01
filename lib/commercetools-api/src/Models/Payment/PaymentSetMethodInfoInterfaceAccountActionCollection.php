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
 * @extends PaymentUpdateActionCollection<PaymentSetMethodInfoInterfaceAccountAction>
 * @method PaymentSetMethodInfoInterfaceAccountAction current()
 * @method PaymentSetMethodInfoInterfaceAccountAction end()
 * @method PaymentSetMethodInfoInterfaceAccountAction at($offset)
 */
class PaymentSetMethodInfoInterfaceAccountActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetMethodInfoInterfaceAccountAction $value
     * @psalm-param PaymentSetMethodInfoInterfaceAccountAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetMethodInfoInterfaceAccountActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetMethodInfoInterfaceAccountAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetMethodInfoInterfaceAccountAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetMethodInfoInterfaceAccountAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetMethodInfoInterfaceAccountAction $data */
                $data = PaymentSetMethodInfoInterfaceAccountActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
