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
 * @extends MapperSequence<PaymentSetMethodInfoInterfaceAction>
 *
 * @method PaymentSetMethodInfoInterfaceAction current()
 * @method PaymentSetMethodInfoInterfaceAction at($offset)
 */
class PaymentSetMethodInfoInterfaceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentSetMethodInfoInterfaceAction $value
     * @psalm-param PaymentSetMethodInfoInterfaceAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentSetMethodInfoInterfaceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetMethodInfoInterfaceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetMethodInfoInterfaceAction
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentSetMethodInfoInterfaceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentSetMethodInfoInterfaceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
