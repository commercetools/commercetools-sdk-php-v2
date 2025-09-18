<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<PaymentTransactionInterfaceIdSetMessage>
 * @method PaymentTransactionInterfaceIdSetMessage current()
 * @method PaymentTransactionInterfaceIdSetMessage end()
 * @method PaymentTransactionInterfaceIdSetMessage at($offset)
 */
class PaymentTransactionInterfaceIdSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentTransactionInterfaceIdSetMessage $value
     * @psalm-param PaymentTransactionInterfaceIdSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentTransactionInterfaceIdSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentTransactionInterfaceIdSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentTransactionInterfaceIdSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentTransactionInterfaceIdSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentTransactionInterfaceIdSetMessage $data */
                $data = PaymentTransactionInterfaceIdSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
