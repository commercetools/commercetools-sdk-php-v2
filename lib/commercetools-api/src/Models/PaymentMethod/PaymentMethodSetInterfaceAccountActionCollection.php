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
 * @extends PaymentMethodUpdateActionCollection<PaymentMethodSetInterfaceAccountAction>
 * @method PaymentMethodSetInterfaceAccountAction current()
 * @method PaymentMethodSetInterfaceAccountAction end()
 * @method PaymentMethodSetInterfaceAccountAction at($offset)
 */
class PaymentMethodSetInterfaceAccountActionCollection extends PaymentMethodUpdateActionCollection
{
    /**
     * @psalm-assert PaymentMethodSetInterfaceAccountAction $value
     * @psalm-param PaymentMethodSetInterfaceAccountAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodSetInterfaceAccountActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodSetInterfaceAccountAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodSetInterfaceAccountAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodSetInterfaceAccountAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodSetInterfaceAccountAction $data */
                $data = PaymentMethodSetInterfaceAccountActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
