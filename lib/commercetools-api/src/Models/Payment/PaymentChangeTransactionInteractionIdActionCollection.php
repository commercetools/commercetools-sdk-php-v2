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
 * @extends PaymentUpdateActionCollection<PaymentChangeTransactionInteractionIdAction>
 * @method PaymentChangeTransactionInteractionIdAction current()
 * @method PaymentChangeTransactionInteractionIdAction at($offset)
 */
class PaymentChangeTransactionInteractionIdActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentChangeTransactionInteractionIdAction $value
     * @psalm-param PaymentChangeTransactionInteractionIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentChangeTransactionInteractionIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentChangeTransactionInteractionIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentChangeTransactionInteractionIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentChangeTransactionInteractionIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentChangeTransactionInteractionIdAction $data */
                $data = PaymentChangeTransactionInteractionIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
