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
 * @extends PaymentMethodUpdateActionCollection<PaymentMethodSetMethodAction>
 * @method PaymentMethodSetMethodAction current()
 * @method PaymentMethodSetMethodAction end()
 * @method PaymentMethodSetMethodAction at($offset)
 */
class PaymentMethodSetMethodActionCollection extends PaymentMethodUpdateActionCollection
{
    /**
     * @psalm-assert PaymentMethodSetMethodAction $value
     * @psalm-param PaymentMethodSetMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodSetMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodSetMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodSetMethodAction
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodSetMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodSetMethodAction $data */
                $data = PaymentMethodSetMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
