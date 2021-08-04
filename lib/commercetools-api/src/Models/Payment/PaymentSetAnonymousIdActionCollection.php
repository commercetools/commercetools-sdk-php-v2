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
 * @extends PaymentUpdateActionCollection<PaymentSetAnonymousIdAction>
 * @method PaymentSetAnonymousIdAction current()
 * @method PaymentSetAnonymousIdAction end()
 * @method PaymentSetAnonymousIdAction at($offset)
 */
class PaymentSetAnonymousIdActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetAnonymousIdAction $value
     * @psalm-param PaymentSetAnonymousIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetAnonymousIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetAnonymousIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetAnonymousIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetAnonymousIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetAnonymousIdAction $data */
                $data = PaymentSetAnonymousIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
