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
 * @extends MessageCollection<PaymentMethodCustomTypeRemovedMessage>
 * @method PaymentMethodCustomTypeRemovedMessage current()
 * @method PaymentMethodCustomTypeRemovedMessage end()
 * @method PaymentMethodCustomTypeRemovedMessage at($offset)
 */
class PaymentMethodCustomTypeRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodCustomTypeRemovedMessage $value
     * @psalm-param PaymentMethodCustomTypeRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCustomTypeRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCustomTypeRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCustomTypeRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCustomTypeRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCustomTypeRemovedMessage $data */
                $data = PaymentMethodCustomTypeRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
