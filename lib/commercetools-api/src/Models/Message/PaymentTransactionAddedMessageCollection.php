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
 * @extends MessageCollection<PaymentTransactionAddedMessage>
 * @method PaymentTransactionAddedMessage current()
 * @method PaymentTransactionAddedMessage at($offset)
 */
class PaymentTransactionAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentTransactionAddedMessage $value
     * @psalm-param PaymentTransactionAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentTransactionAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentTransactionAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentTransactionAddedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentTransactionAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentTransactionAddedMessage $data */
                $data = PaymentTransactionAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
