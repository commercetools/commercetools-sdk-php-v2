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
 * @extends PaymentMethodUpdateActionCollection<PaymentMethodSetCustomTypeAction>
 * @method PaymentMethodSetCustomTypeAction current()
 * @method PaymentMethodSetCustomTypeAction end()
 * @method PaymentMethodSetCustomTypeAction at($offset)
 */
class PaymentMethodSetCustomTypeActionCollection extends PaymentMethodUpdateActionCollection
{
    /**
     * @psalm-assert PaymentMethodSetCustomTypeAction $value
     * @psalm-param PaymentMethodSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodSetCustomTypeAction $data */
                $data = PaymentMethodSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
