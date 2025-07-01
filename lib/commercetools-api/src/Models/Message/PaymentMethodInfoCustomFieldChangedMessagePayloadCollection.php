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
 * @extends MessagePayloadCollection<PaymentMethodInfoCustomFieldChangedMessagePayload>
 * @method PaymentMethodInfoCustomFieldChangedMessagePayload current()
 * @method PaymentMethodInfoCustomFieldChangedMessagePayload end()
 * @method PaymentMethodInfoCustomFieldChangedMessagePayload at($offset)
 */
class PaymentMethodInfoCustomFieldChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodInfoCustomFieldChangedMessagePayload $value
     * @psalm-param PaymentMethodInfoCustomFieldChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoCustomFieldChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoCustomFieldChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoCustomFieldChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoCustomFieldChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoCustomFieldChangedMessagePayload $data */
                $data = PaymentMethodInfoCustomFieldChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
