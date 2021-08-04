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
 * @extends PaymentUpdateActionCollection<PaymentSetAuthorizationAction>
 * @method PaymentSetAuthorizationAction current()
 * @method PaymentSetAuthorizationAction at($offset)
 */
class PaymentSetAuthorizationActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetAuthorizationAction $value
     * @psalm-param PaymentSetAuthorizationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetAuthorizationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetAuthorizationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetAuthorizationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentSetAuthorizationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetAuthorizationAction $data */
                $data = PaymentSetAuthorizationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
