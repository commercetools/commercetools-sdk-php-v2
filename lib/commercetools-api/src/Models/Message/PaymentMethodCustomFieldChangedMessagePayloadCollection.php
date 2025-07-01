<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<PaymentMethodCustomFieldChangedMessagePayload>
 * @method PaymentMethodCustomFieldChangedMessagePayload current()
 * @method PaymentMethodCustomFieldChangedMessagePayload end()
 * @method PaymentMethodCustomFieldChangedMessagePayload at($offset)
 */
class PaymentMethodCustomFieldChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodCustomFieldChangedMessagePayload $value
     * @psalm-param PaymentMethodCustomFieldChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCustomFieldChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCustomFieldChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCustomFieldChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCustomFieldChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCustomFieldChangedMessagePayload $data */
                $data = PaymentMethodCustomFieldChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
