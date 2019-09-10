<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentTransactionStateChangedMessage>
 * @method PaymentTransactionStateChangedMessage current()
 * @method PaymentTransactionStateChangedMessage at($offset)
 */
class PaymentTransactionStateChangedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentTransactionStateChangedMessage $value
     * @psalm-param PaymentTransactionStateChangedMessage|stdClass $value
     * @return PaymentTransactionStateChangedMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentTransactionStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentTransactionStateChangedMessage
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentTransactionStateChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentTransactionStateChangedMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}