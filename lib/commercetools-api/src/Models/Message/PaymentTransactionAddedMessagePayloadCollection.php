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
 * @extends MessagePayloadCollection<PaymentTransactionAddedMessagePayload>
 * @method PaymentTransactionAddedMessagePayload current()
 * @method PaymentTransactionAddedMessagePayload at($offset)
 */
class PaymentTransactionAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentTransactionAddedMessagePayload $value
     * @psalm-param PaymentTransactionAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentTransactionAddedMessagePayloadCollection
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
        return function (?int $index): ?PaymentTransactionAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentTransactionAddedMessagePayload $data */
                $data = PaymentTransactionAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
