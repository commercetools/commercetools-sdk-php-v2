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
 * @extends MapperSequence<PaymentTransitionStateAction>
 * @method PaymentTransitionStateAction current()
 * @method PaymentTransitionStateAction at($offset)
 */
class PaymentTransitionStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentTransitionStateAction $value
     * @psalm-param PaymentTransitionStateAction|stdClass $value
     * @return PaymentTransitionStateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentTransitionStateAction
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentTransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentTransitionStateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}