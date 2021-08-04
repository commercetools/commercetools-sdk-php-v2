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
 * @extends PaymentUpdateActionCollection<PaymentSetStatusInterfaceTextAction>
 * @method PaymentSetStatusInterfaceTextAction current()
 * @method PaymentSetStatusInterfaceTextAction at($offset)
 */
class PaymentSetStatusInterfaceTextActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetStatusInterfaceTextAction $value
     * @psalm-param PaymentSetStatusInterfaceTextAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetStatusInterfaceTextActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetStatusInterfaceTextAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetStatusInterfaceTextAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetStatusInterfaceTextAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetStatusInterfaceTextAction $data */
                $data = PaymentSetStatusInterfaceTextActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
