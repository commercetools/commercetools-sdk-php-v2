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
 * @extends PaymentMethodUpdateActionCollection<PaymentMethodSetKeyAction>
 * @method PaymentMethodSetKeyAction current()
 * @method PaymentMethodSetKeyAction end()
 * @method PaymentMethodSetKeyAction at($offset)
 */
class PaymentMethodSetKeyActionCollection extends PaymentMethodUpdateActionCollection
{
    /**
     * @psalm-assert PaymentMethodSetKeyAction $value
     * @psalm-param PaymentMethodSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodSetKeyAction $data */
                $data = PaymentMethodSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
