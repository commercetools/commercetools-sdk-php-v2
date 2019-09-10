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
 * @extends MapperSequence<PaymentSetCustomFieldAction>
 * @method PaymentSetCustomFieldAction current()
 * @method PaymentSetCustomFieldAction at($offset)
 */
class PaymentSetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentSetCustomFieldAction $value
     * @psalm-param PaymentSetCustomFieldAction|stdClass $value
     * @return PaymentSetCustomFieldActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetCustomFieldAction
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}