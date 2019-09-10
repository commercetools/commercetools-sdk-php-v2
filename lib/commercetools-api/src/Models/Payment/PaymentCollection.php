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
 * @extends MapperSequence<Payment>
 * @method Payment current()
 * @method Payment at($offset)
 */
class PaymentCollection extends MapperSequence
{
    /**
     * @psalm-assert Payment $value
     * @psalm-param Payment|stdClass $value
     * @return PaymentCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof Payment) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Payment
     */
    protected function mapper()
    {
        return function(int $index): ?Payment {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}