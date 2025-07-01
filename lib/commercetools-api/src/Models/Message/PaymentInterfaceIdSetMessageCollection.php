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
 * @extends MessageCollection<PaymentInterfaceIdSetMessage>
 * @method PaymentInterfaceIdSetMessage current()
 * @method PaymentInterfaceIdSetMessage end()
 * @method PaymentInterfaceIdSetMessage at($offset)
 */
class PaymentInterfaceIdSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentInterfaceIdSetMessage $value
     * @psalm-param PaymentInterfaceIdSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentInterfaceIdSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentInterfaceIdSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentInterfaceIdSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentInterfaceIdSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentInterfaceIdSetMessage $data */
                $data = PaymentInterfaceIdSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
