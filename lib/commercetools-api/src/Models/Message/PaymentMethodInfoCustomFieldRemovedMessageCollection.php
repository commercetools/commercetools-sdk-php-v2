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
 * @extends MessageCollection<PaymentMethodInfoCustomFieldRemovedMessage>
 * @method PaymentMethodInfoCustomFieldRemovedMessage current()
 * @method PaymentMethodInfoCustomFieldRemovedMessage end()
 * @method PaymentMethodInfoCustomFieldRemovedMessage at($offset)
 */
class PaymentMethodInfoCustomFieldRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodInfoCustomFieldRemovedMessage $value
     * @psalm-param PaymentMethodInfoCustomFieldRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoCustomFieldRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoCustomFieldRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoCustomFieldRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoCustomFieldRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoCustomFieldRemovedMessage $data */
                $data = PaymentMethodInfoCustomFieldRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
