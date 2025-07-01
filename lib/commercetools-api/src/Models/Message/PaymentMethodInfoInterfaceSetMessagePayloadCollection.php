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
 * @extends MessagePayloadCollection<PaymentMethodInfoInterfaceSetMessagePayload>
 * @method PaymentMethodInfoInterfaceSetMessagePayload current()
 * @method PaymentMethodInfoInterfaceSetMessagePayload end()
 * @method PaymentMethodInfoInterfaceSetMessagePayload at($offset)
 */
class PaymentMethodInfoInterfaceSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodInfoInterfaceSetMessagePayload $value
     * @psalm-param PaymentMethodInfoInterfaceSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoInterfaceSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoInterfaceSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoInterfaceSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoInterfaceSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoInterfaceSetMessagePayload $data */
                $data = PaymentMethodInfoInterfaceSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
