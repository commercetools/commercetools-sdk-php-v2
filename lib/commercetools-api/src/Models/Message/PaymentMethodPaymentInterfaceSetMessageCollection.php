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
 * @extends MessageCollection<PaymentMethodPaymentInterfaceSetMessage>
 * @method PaymentMethodPaymentInterfaceSetMessage current()
 * @method PaymentMethodPaymentInterfaceSetMessage end()
 * @method PaymentMethodPaymentInterfaceSetMessage at($offset)
 */
class PaymentMethodPaymentInterfaceSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodPaymentInterfaceSetMessage $value
     * @psalm-param PaymentMethodPaymentInterfaceSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodPaymentInterfaceSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodPaymentInterfaceSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodPaymentInterfaceSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodPaymentInterfaceSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodPaymentInterfaceSetMessage $data */
                $data = PaymentMethodPaymentInterfaceSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
