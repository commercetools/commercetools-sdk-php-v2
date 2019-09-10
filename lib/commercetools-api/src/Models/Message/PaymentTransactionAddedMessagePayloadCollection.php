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
 * @extends MapperSequence<PaymentTransactionAddedMessagePayload>
 * @method PaymentTransactionAddedMessagePayload current()
 * @method PaymentTransactionAddedMessagePayload at($offset)
 */
class PaymentTransactionAddedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentTransactionAddedMessagePayload $value
     * @psalm-param PaymentTransactionAddedMessagePayload|stdClass $value
     * @return PaymentTransactionAddedMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentTransactionAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentTransactionAddedMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentTransactionAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentTransactionAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}