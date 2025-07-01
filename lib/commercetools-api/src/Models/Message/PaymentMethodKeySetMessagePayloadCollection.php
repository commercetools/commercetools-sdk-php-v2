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
 * @extends MessagePayloadCollection<PaymentMethodKeySetMessagePayload>
 * @method PaymentMethodKeySetMessagePayload current()
 * @method PaymentMethodKeySetMessagePayload end()
 * @method PaymentMethodKeySetMessagePayload at($offset)
 */
class PaymentMethodKeySetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodKeySetMessagePayload $value
     * @psalm-param PaymentMethodKeySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodKeySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodKeySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodKeySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodKeySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodKeySetMessagePayload $data */
                $data = PaymentMethodKeySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
