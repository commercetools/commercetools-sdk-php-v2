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
 * @extends MessageCollection<PaymentMethodInterfaceAccountSetMessage>
 * @method PaymentMethodInterfaceAccountSetMessage current()
 * @method PaymentMethodInterfaceAccountSetMessage end()
 * @method PaymentMethodInterfaceAccountSetMessage at($offset)
 */
class PaymentMethodInterfaceAccountSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodInterfaceAccountSetMessage $value
     * @psalm-param PaymentMethodInterfaceAccountSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInterfaceAccountSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInterfaceAccountSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInterfaceAccountSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInterfaceAccountSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInterfaceAccountSetMessage $data */
                $data = PaymentMethodInterfaceAccountSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
