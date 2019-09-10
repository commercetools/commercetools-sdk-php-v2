<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentSetAmountRefundedAction>
 * @method PaymentSetAmountRefundedAction current()
 * @method PaymentSetAmountRefundedAction at($offset)
 */
class PaymentSetAmountRefundedActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentSetAmountRefundedAction $value
     * @psalm-param PaymentSetAmountRefundedAction|stdClass $value
     * @return PaymentSetAmountRefundedActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetAmountRefundedAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetAmountRefundedAction
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentSetAmountRefundedAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentSetAmountRefundedActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}