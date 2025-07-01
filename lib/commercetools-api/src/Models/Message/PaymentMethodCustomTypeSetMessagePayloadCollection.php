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
 * @extends MessagePayloadCollection<PaymentMethodCustomTypeSetMessagePayload>
 * @method PaymentMethodCustomTypeSetMessagePayload current()
 * @method PaymentMethodCustomTypeSetMessagePayload end()
 * @method PaymentMethodCustomTypeSetMessagePayload at($offset)
 */
class PaymentMethodCustomTypeSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodCustomTypeSetMessagePayload $value
     * @psalm-param PaymentMethodCustomTypeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCustomTypeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCustomTypeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCustomTypeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCustomTypeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCustomTypeSetMessagePayload $data */
                $data = PaymentMethodCustomTypeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
