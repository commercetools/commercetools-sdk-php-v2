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
 * @extends MessageCollection<PaymentMethodCustomFieldChangedMessage>
 * @method PaymentMethodCustomFieldChangedMessage current()
 * @method PaymentMethodCustomFieldChangedMessage end()
 * @method PaymentMethodCustomFieldChangedMessage at($offset)
 */
class PaymentMethodCustomFieldChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodCustomFieldChangedMessage $value
     * @psalm-param PaymentMethodCustomFieldChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCustomFieldChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCustomFieldChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCustomFieldChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCustomFieldChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCustomFieldChangedMessage $data */
                $data = PaymentMethodCustomFieldChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
