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
 * @extends MessagePayloadCollection<PaymentMethodDefaultSetMessagePayload>
 * @method PaymentMethodDefaultSetMessagePayload current()
 * @method PaymentMethodDefaultSetMessagePayload end()
 * @method PaymentMethodDefaultSetMessagePayload at($offset)
 */
class PaymentMethodDefaultSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodDefaultSetMessagePayload $value
     * @psalm-param PaymentMethodDefaultSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodDefaultSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodDefaultSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodDefaultSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodDefaultSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodDefaultSetMessagePayload $data */
                $data = PaymentMethodDefaultSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
