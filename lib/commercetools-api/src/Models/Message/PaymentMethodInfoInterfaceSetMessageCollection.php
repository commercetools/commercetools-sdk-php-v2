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
 * @extends MessageCollection<PaymentMethodInfoInterfaceSetMessage>
 * @method PaymentMethodInfoInterfaceSetMessage current()
 * @method PaymentMethodInfoInterfaceSetMessage end()
 * @method PaymentMethodInfoInterfaceSetMessage at($offset)
 */
class PaymentMethodInfoInterfaceSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodInfoInterfaceSetMessage $value
     * @psalm-param PaymentMethodInfoInterfaceSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoInterfaceSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoInterfaceSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoInterfaceSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoInterfaceSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoInterfaceSetMessage $data */
                $data = PaymentMethodInfoInterfaceSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
