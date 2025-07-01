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
 * @extends PaymentMethodUpdateActionCollection<PaymentMethodSetPaymentMethodStatusAction>
 * @method PaymentMethodSetPaymentMethodStatusAction current()
 * @method PaymentMethodSetPaymentMethodStatusAction end()
 * @method PaymentMethodSetPaymentMethodStatusAction at($offset)
 */
class PaymentMethodSetPaymentMethodStatusActionCollection extends PaymentMethodUpdateActionCollection
{
    /**
     * @psalm-assert PaymentMethodSetPaymentMethodStatusAction $value
     * @psalm-param PaymentMethodSetPaymentMethodStatusAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodSetPaymentMethodStatusActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodSetPaymentMethodStatusAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodSetPaymentMethodStatusAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodSetPaymentMethodStatusAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodSetPaymentMethodStatusAction $data */
                $data = PaymentMethodSetPaymentMethodStatusActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
