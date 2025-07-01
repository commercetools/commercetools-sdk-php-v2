<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<PaymentMethodPaymentMethodStatusSetMessage>
 * @method PaymentMethodPaymentMethodStatusSetMessage current()
 * @method PaymentMethodPaymentMethodStatusSetMessage end()
 * @method PaymentMethodPaymentMethodStatusSetMessage at($offset)
 */
class PaymentMethodPaymentMethodStatusSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodPaymentMethodStatusSetMessage $value
     * @psalm-param PaymentMethodPaymentMethodStatusSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodPaymentMethodStatusSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodPaymentMethodStatusSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodPaymentMethodStatusSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodPaymentMethodStatusSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodPaymentMethodStatusSetMessage $data */
                $data = PaymentMethodPaymentMethodStatusSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
