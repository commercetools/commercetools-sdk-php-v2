<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Api\Models\PaymentMethod\PaymentMethodUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends PaymentMethodUpdateActionCollection<PaymentMethodSetPaymentInterfaceAction>
 * @method PaymentMethodSetPaymentInterfaceAction current()
 * @method PaymentMethodSetPaymentInterfaceAction end()
 * @method PaymentMethodSetPaymentInterfaceAction at($offset)
 */
class PaymentMethodSetPaymentInterfaceActionCollection extends PaymentMethodUpdateActionCollection
{
    /**
     * @psalm-assert PaymentMethodSetPaymentInterfaceAction $value
     * @psalm-param PaymentMethodSetPaymentInterfaceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodSetPaymentInterfaceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodSetPaymentInterfaceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodSetPaymentInterfaceAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodSetPaymentInterfaceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodSetPaymentInterfaceAction $data */
                $data = PaymentMethodSetPaymentInterfaceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
