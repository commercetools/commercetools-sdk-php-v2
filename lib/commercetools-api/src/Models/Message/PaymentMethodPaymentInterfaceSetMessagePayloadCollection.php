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
 * @extends MessagePayloadCollection<PaymentMethodPaymentInterfaceSetMessagePayload>
 * @method PaymentMethodPaymentInterfaceSetMessagePayload current()
 * @method PaymentMethodPaymentInterfaceSetMessagePayload end()
 * @method PaymentMethodPaymentInterfaceSetMessagePayload at($offset)
 */
class PaymentMethodPaymentInterfaceSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodPaymentInterfaceSetMessagePayload $value
     * @psalm-param PaymentMethodPaymentInterfaceSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodPaymentInterfaceSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodPaymentInterfaceSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodPaymentInterfaceSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodPaymentInterfaceSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodPaymentInterfaceSetMessagePayload $data */
                $data = PaymentMethodPaymentInterfaceSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
