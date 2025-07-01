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
 * @extends PaymentMethodUpdateActionCollection<PaymentMethodSetDefaultAction>
 * @method PaymentMethodSetDefaultAction current()
 * @method PaymentMethodSetDefaultAction end()
 * @method PaymentMethodSetDefaultAction at($offset)
 */
class PaymentMethodSetDefaultActionCollection extends PaymentMethodUpdateActionCollection
{
    /**
     * @psalm-assert PaymentMethodSetDefaultAction $value
     * @psalm-param PaymentMethodSetDefaultAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodSetDefaultActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodSetDefaultAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodSetDefaultAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodSetDefaultAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodSetDefaultAction $data */
                $data = PaymentMethodSetDefaultActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
