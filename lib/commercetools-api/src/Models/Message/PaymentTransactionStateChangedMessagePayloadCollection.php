<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentTransactionStateChangedMessagePayload>
 *
 * @method PaymentTransactionStateChangedMessagePayload current()
 * @method PaymentTransactionStateChangedMessagePayload at($offset)
 */
class PaymentTransactionStateChangedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentTransactionStateChangedMessagePayload $value
     * @psalm-param PaymentTransactionStateChangedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentTransactionStateChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentTransactionStateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentTransactionStateChangedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentTransactionStateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentTransactionStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
