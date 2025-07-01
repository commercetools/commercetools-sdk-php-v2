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
 * @extends MessageCollection<PaymentMethodInfoCustomTypeRemovedMessage>
 * @method PaymentMethodInfoCustomTypeRemovedMessage current()
 * @method PaymentMethodInfoCustomTypeRemovedMessage end()
 * @method PaymentMethodInfoCustomTypeRemovedMessage at($offset)
 */
class PaymentMethodInfoCustomTypeRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodInfoCustomTypeRemovedMessage $value
     * @psalm-param PaymentMethodInfoCustomTypeRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoCustomTypeRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoCustomTypeRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoCustomTypeRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoCustomTypeRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoCustomTypeRemovedMessage $data */
                $data = PaymentMethodInfoCustomTypeRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
