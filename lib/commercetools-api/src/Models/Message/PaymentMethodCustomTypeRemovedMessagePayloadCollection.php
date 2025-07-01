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
 * @extends MessagePayloadCollection<PaymentMethodCustomTypeRemovedMessagePayload>
 * @method PaymentMethodCustomTypeRemovedMessagePayload current()
 * @method PaymentMethodCustomTypeRemovedMessagePayload end()
 * @method PaymentMethodCustomTypeRemovedMessagePayload at($offset)
 */
class PaymentMethodCustomTypeRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodCustomTypeRemovedMessagePayload $value
     * @psalm-param PaymentMethodCustomTypeRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCustomTypeRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCustomTypeRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCustomTypeRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCustomTypeRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCustomTypeRemovedMessagePayload $data */
                $data = PaymentMethodCustomTypeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
