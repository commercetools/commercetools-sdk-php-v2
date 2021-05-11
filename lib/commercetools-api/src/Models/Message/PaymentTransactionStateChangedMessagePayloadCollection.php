<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<PaymentTransactionStateChangedMessagePayload>
 * @method PaymentTransactionStateChangedMessagePayload current()
 * @method PaymentTransactionStateChangedMessagePayload at($offset)
 */
class PaymentTransactionStateChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentTransactionStateChangedMessagePayload $value
     * @psalm-param PaymentTransactionStateChangedMessagePayload|stdClass $value
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
                /** @var PaymentTransactionStateChangedMessagePayload $data */
                $data = PaymentTransactionStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
