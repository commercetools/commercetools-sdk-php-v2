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
 * @extends MessagePayloadCollection<PaymentMethodMethodSetMessagePayload>
 * @method PaymentMethodMethodSetMessagePayload current()
 * @method PaymentMethodMethodSetMessagePayload end()
 * @method PaymentMethodMethodSetMessagePayload at($offset)
 */
class PaymentMethodMethodSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodMethodSetMessagePayload $value
     * @psalm-param PaymentMethodMethodSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodMethodSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodMethodSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodMethodSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodMethodSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodMethodSetMessagePayload $data */
                $data = PaymentMethodMethodSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
