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
 * @extends PaymentMethodUpdateActionCollection<PaymentMethodSetCustomFieldAction>
 * @method PaymentMethodSetCustomFieldAction current()
 * @method PaymentMethodSetCustomFieldAction end()
 * @method PaymentMethodSetCustomFieldAction at($offset)
 */
class PaymentMethodSetCustomFieldActionCollection extends PaymentMethodUpdateActionCollection
{
    /**
     * @psalm-assert PaymentMethodSetCustomFieldAction $value
     * @psalm-param PaymentMethodSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodSetCustomFieldAction $data */
                $data = PaymentMethodSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
