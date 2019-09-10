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
 * @extends MapperSequence<PaymentSetMethodInfoNameAction>
 *
 * @method PaymentSetMethodInfoNameAction current()
 * @method PaymentSetMethodInfoNameAction at($offset)
 */
class PaymentSetMethodInfoNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentSetMethodInfoNameAction $value
     * @psalm-param PaymentSetMethodInfoNameAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentSetMethodInfoNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetMethodInfoNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetMethodInfoNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentSetMethodInfoNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentSetMethodInfoNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
