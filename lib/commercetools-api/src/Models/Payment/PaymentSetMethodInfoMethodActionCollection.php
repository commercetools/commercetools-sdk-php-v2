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
 * @extends PaymentUpdateActionCollection<PaymentSetMethodInfoMethodAction>
 * @method PaymentSetMethodInfoMethodAction current()
 * @method PaymentSetMethodInfoMethodAction end()
 * @method PaymentSetMethodInfoMethodAction at($offset)
 */
class PaymentSetMethodInfoMethodActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetMethodInfoMethodAction $value
     * @psalm-param PaymentSetMethodInfoMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetMethodInfoMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetMethodInfoMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetMethodInfoMethodAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetMethodInfoMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetMethodInfoMethodAction $data */
                $data = PaymentSetMethodInfoMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
