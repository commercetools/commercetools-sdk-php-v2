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
 * @extends MessageCollection<PaymentMethodInfoCustomFieldChangedMessage>
 * @method PaymentMethodInfoCustomFieldChangedMessage current()
 * @method PaymentMethodInfoCustomFieldChangedMessage end()
 * @method PaymentMethodInfoCustomFieldChangedMessage at($offset)
 */
class PaymentMethodInfoCustomFieldChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodInfoCustomFieldChangedMessage $value
     * @psalm-param PaymentMethodInfoCustomFieldChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoCustomFieldChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoCustomFieldChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoCustomFieldChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoCustomFieldChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoCustomFieldChangedMessage $data */
                $data = PaymentMethodInfoCustomFieldChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
