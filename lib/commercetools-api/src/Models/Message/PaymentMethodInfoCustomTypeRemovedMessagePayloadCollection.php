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
 * @extends MessagePayloadCollection<PaymentMethodInfoCustomTypeRemovedMessagePayload>
 * @method PaymentMethodInfoCustomTypeRemovedMessagePayload current()
 * @method PaymentMethodInfoCustomTypeRemovedMessagePayload end()
 * @method PaymentMethodInfoCustomTypeRemovedMessagePayload at($offset)
 */
class PaymentMethodInfoCustomTypeRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodInfoCustomTypeRemovedMessagePayload $value
     * @psalm-param PaymentMethodInfoCustomTypeRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoCustomTypeRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoCustomTypeRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoCustomTypeRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoCustomTypeRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoCustomTypeRemovedMessagePayload $data */
                $data = PaymentMethodInfoCustomTypeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
