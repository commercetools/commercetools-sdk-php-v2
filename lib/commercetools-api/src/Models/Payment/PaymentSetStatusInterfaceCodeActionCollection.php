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
 * @extends PaymentUpdateActionCollection<PaymentSetStatusInterfaceCodeAction>
 * @method PaymentSetStatusInterfaceCodeAction current()
 * @method PaymentSetStatusInterfaceCodeAction at($offset)
 */
class PaymentSetStatusInterfaceCodeActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetStatusInterfaceCodeAction $value
     * @psalm-param PaymentSetStatusInterfaceCodeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetStatusInterfaceCodeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetStatusInterfaceCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetStatusInterfaceCodeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetStatusInterfaceCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetStatusInterfaceCodeAction $data */
                $data = PaymentSetStatusInterfaceCodeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
