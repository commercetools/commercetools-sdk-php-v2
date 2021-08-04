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
 * @extends PaymentUpdateActionCollection<PaymentTransitionStateAction>
 * @method PaymentTransitionStateAction current()
 * @method PaymentTransitionStateAction end()
 * @method PaymentTransitionStateAction at($offset)
 */
class PaymentTransitionStateActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentTransitionStateAction $value
     * @psalm-param PaymentTransitionStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentTransitionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentTransitionStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentTransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentTransitionStateAction $data */
                $data = PaymentTransitionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
