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
 * @extends MessageCollection<PaymentCreatedMessage>
 * @method PaymentCreatedMessage current()
 * @method PaymentCreatedMessage end()
 * @method PaymentCreatedMessage at($offset)
 */
class PaymentCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentCreatedMessage $value
     * @psalm-param PaymentCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentCreatedMessage $data */
                $data = PaymentCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
