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
 * @extends PaymentUpdateActionCollection<PaymentChangeAmountPlannedAction>
 * @method PaymentChangeAmountPlannedAction current()
 * @method PaymentChangeAmountPlannedAction at($offset)
 */
class PaymentChangeAmountPlannedActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentChangeAmountPlannedAction $value
     * @psalm-param PaymentChangeAmountPlannedAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentChangeAmountPlannedActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentChangeAmountPlannedAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentChangeAmountPlannedAction
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentChangeAmountPlannedAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentChangeAmountPlannedAction $data */
                $data = PaymentChangeAmountPlannedActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
