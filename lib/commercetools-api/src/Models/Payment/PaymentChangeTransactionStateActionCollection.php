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
 * @extends MapperSequence<PaymentChangeTransactionStateAction>
 *
 * @method PaymentChangeTransactionStateAction current()
 * @method PaymentChangeTransactionStateAction at($offset)
 */
class PaymentChangeTransactionStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentChangeTransactionStateAction $value
     * @psalm-param PaymentChangeTransactionStateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentChangeTransactionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentChangeTransactionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentChangeTransactionStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentChangeTransactionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentChangeTransactionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
