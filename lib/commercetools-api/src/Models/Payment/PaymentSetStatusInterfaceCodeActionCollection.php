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
 * @extends MapperSequence<PaymentSetStatusInterfaceCodeAction>
 * @method PaymentSetStatusInterfaceCodeAction current()
 * @method PaymentSetStatusInterfaceCodeAction at($offset)
 */
class PaymentSetStatusInterfaceCodeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentSetStatusInterfaceCodeAction $value
     * @psalm-param PaymentSetStatusInterfaceCodeAction|stdClass $value
     * @return PaymentSetStatusInterfaceCodeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetStatusInterfaceCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetStatusInterfaceCodeAction
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentSetStatusInterfaceCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentSetStatusInterfaceCodeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}