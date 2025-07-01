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
 * @extends PaymentUpdateActionCollection<PaymentSetMethodInfoCustomFieldAction>
 * @method PaymentSetMethodInfoCustomFieldAction current()
 * @method PaymentSetMethodInfoCustomFieldAction end()
 * @method PaymentSetMethodInfoCustomFieldAction at($offset)
 */
class PaymentSetMethodInfoCustomFieldActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetMethodInfoCustomFieldAction $value
     * @psalm-param PaymentSetMethodInfoCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetMethodInfoCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetMethodInfoCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetMethodInfoCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetMethodInfoCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetMethodInfoCustomFieldAction $data */
                $data = PaymentSetMethodInfoCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
