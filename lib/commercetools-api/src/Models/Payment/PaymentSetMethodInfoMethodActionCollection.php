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
 * @extends MapperSequence<PaymentSetMethodInfoMethodAction>
 * @method PaymentSetMethodInfoMethodAction current()
 * @method PaymentSetMethodInfoMethodAction at($offset)
 */
class PaymentSetMethodInfoMethodActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentSetMethodInfoMethodAction $value
     * @psalm-param PaymentSetMethodInfoMethodAction|stdClass $value
     * @return PaymentSetMethodInfoMethodActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetMethodInfoMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetMethodInfoMethodAction
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentSetMethodInfoMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentSetMethodInfoMethodActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}