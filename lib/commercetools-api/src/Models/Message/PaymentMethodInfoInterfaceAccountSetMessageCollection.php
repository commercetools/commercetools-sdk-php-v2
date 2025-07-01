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
 * @extends MessageCollection<PaymentMethodInfoInterfaceAccountSetMessage>
 * @method PaymentMethodInfoInterfaceAccountSetMessage current()
 * @method PaymentMethodInfoInterfaceAccountSetMessage end()
 * @method PaymentMethodInfoInterfaceAccountSetMessage at($offset)
 */
class PaymentMethodInfoInterfaceAccountSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodInfoInterfaceAccountSetMessage $value
     * @psalm-param PaymentMethodInfoInterfaceAccountSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoInterfaceAccountSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoInterfaceAccountSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoInterfaceAccountSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoInterfaceAccountSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoInterfaceAccountSetMessage $data */
                $data = PaymentMethodInfoInterfaceAccountSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
