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
 * @extends PaymentUpdateActionCollection<PaymentSetCustomFieldAction>
 * @method PaymentSetCustomFieldAction current()
 * @method PaymentSetCustomFieldAction at($offset)
 */
class PaymentSetCustomFieldActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetCustomFieldAction $value
     * @psalm-param PaymentSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetCustomFieldAction $data */
                $data = PaymentSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
