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
 * @extends MapperSequence<PaymentChangeTransactionTimestampAction>
 * @method PaymentChangeTransactionTimestampAction current()
 * @method PaymentChangeTransactionTimestampAction at($offset)
 */
class PaymentChangeTransactionTimestampActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentChangeTransactionTimestampAction $value
     * @psalm-param PaymentChangeTransactionTimestampAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentChangeTransactionTimestampActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentChangeTransactionTimestampAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentChangeTransactionTimestampAction
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentChangeTransactionTimestampAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentChangeTransactionTimestampActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
