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
 * @extends MessagePayloadCollection<PaymentTransactionInterfaceIdSetMessagePayload>
 * @method PaymentTransactionInterfaceIdSetMessagePayload current()
 * @method PaymentTransactionInterfaceIdSetMessagePayload end()
 * @method PaymentTransactionInterfaceIdSetMessagePayload at($offset)
 */
class PaymentTransactionInterfaceIdSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentTransactionInterfaceIdSetMessagePayload $value
     * @psalm-param PaymentTransactionInterfaceIdSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentTransactionInterfaceIdSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentTransactionInterfaceIdSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentTransactionInterfaceIdSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentTransactionInterfaceIdSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentTransactionInterfaceIdSetMessagePayload $data */
                $data = PaymentTransactionInterfaceIdSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
