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
 * @extends MessagePayloadCollection<PaymentMethodInfoTokenSetMessagePayload>
 * @method PaymentMethodInfoTokenSetMessagePayload current()
 * @method PaymentMethodInfoTokenSetMessagePayload end()
 * @method PaymentMethodInfoTokenSetMessagePayload at($offset)
 */
class PaymentMethodInfoTokenSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodInfoTokenSetMessagePayload $value
     * @psalm-param PaymentMethodInfoTokenSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoTokenSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoTokenSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoTokenSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoTokenSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoTokenSetMessagePayload $data */
                $data = PaymentMethodInfoTokenSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
