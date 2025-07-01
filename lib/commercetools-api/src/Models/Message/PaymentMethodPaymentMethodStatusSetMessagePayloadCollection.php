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
 * @extends MessagePayloadCollection<PaymentMethodPaymentMethodStatusSetMessagePayload>
 * @method PaymentMethodPaymentMethodStatusSetMessagePayload current()
 * @method PaymentMethodPaymentMethodStatusSetMessagePayload end()
 * @method PaymentMethodPaymentMethodStatusSetMessagePayload at($offset)
 */
class PaymentMethodPaymentMethodStatusSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodPaymentMethodStatusSetMessagePayload $value
     * @psalm-param PaymentMethodPaymentMethodStatusSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodPaymentMethodStatusSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodPaymentMethodStatusSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodPaymentMethodStatusSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodPaymentMethodStatusSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodPaymentMethodStatusSetMessagePayload $data */
                $data = PaymentMethodPaymentMethodStatusSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
