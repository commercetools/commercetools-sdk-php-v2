<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentUpdateAction>
 *
 * @method PaymentUpdateAction current()
 * @method PaymentUpdateAction at($offset)
 */
class PaymentUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentUpdateAction $value
     * @psalm-param PaymentUpdateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
