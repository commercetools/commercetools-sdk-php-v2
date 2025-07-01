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
 * @extends PaymentMethodUpdateActionCollection<PaymentMethodSetNameAction>
 * @method PaymentMethodSetNameAction current()
 * @method PaymentMethodSetNameAction end()
 * @method PaymentMethodSetNameAction at($offset)
 */
class PaymentMethodSetNameActionCollection extends PaymentMethodUpdateActionCollection
{
    /**
     * @psalm-assert PaymentMethodSetNameAction $value
     * @psalm-param PaymentMethodSetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodSetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodSetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodSetNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodSetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodSetNameAction $data */
                $data = PaymentMethodSetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
