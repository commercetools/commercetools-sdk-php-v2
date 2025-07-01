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
 * @extends MessagePayloadCollection<PaymentInterfaceIdSetMessagePayload>
 * @method PaymentInterfaceIdSetMessagePayload current()
 * @method PaymentInterfaceIdSetMessagePayload end()
 * @method PaymentInterfaceIdSetMessagePayload at($offset)
 */
class PaymentInterfaceIdSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentInterfaceIdSetMessagePayload $value
     * @psalm-param PaymentInterfaceIdSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentInterfaceIdSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentInterfaceIdSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentInterfaceIdSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentInterfaceIdSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentInterfaceIdSetMessagePayload $data */
                $data = PaymentInterfaceIdSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
