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
 * @extends PaymentUpdateActionCollection<PaymentSetExternalIdAction>
 * @method PaymentSetExternalIdAction current()
 * @method PaymentSetExternalIdAction at($offset)
 */
class PaymentSetExternalIdActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentSetExternalIdAction $value
     * @psalm-param PaymentSetExternalIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentSetExternalIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetExternalIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetExternalIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentSetExternalIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentSetExternalIdAction $data */
                $data = PaymentSetExternalIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
