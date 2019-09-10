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
 * @extends MapperSequence<PaymentSetAnonymousIdAction>
 * @method PaymentSetAnonymousIdAction current()
 * @method PaymentSetAnonymousIdAction at($offset)
 */
class PaymentSetAnonymousIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentSetAnonymousIdAction $value
     * @psalm-param PaymentSetAnonymousIdAction|stdClass $value
     * @return PaymentSetAnonymousIdActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentSetAnonymousIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentSetAnonymousIdAction
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentSetAnonymousIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentSetAnonymousIdActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}