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
 * @extends MessageCollection<PaymentMethodCustomFieldRemovedMessage>
 * @method PaymentMethodCustomFieldRemovedMessage current()
 * @method PaymentMethodCustomFieldRemovedMessage end()
 * @method PaymentMethodCustomFieldRemovedMessage at($offset)
 */
class PaymentMethodCustomFieldRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodCustomFieldRemovedMessage $value
     * @psalm-param PaymentMethodCustomFieldRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCustomFieldRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCustomFieldRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCustomFieldRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCustomFieldRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCustomFieldRemovedMessage $data */
                $data = PaymentMethodCustomFieldRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
