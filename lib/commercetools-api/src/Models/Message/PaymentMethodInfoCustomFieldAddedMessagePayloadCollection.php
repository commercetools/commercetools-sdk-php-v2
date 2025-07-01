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
 * @extends MessagePayloadCollection<PaymentMethodInfoCustomFieldAddedMessagePayload>
 * @method PaymentMethodInfoCustomFieldAddedMessagePayload current()
 * @method PaymentMethodInfoCustomFieldAddedMessagePayload end()
 * @method PaymentMethodInfoCustomFieldAddedMessagePayload at($offset)
 */
class PaymentMethodInfoCustomFieldAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodInfoCustomFieldAddedMessagePayload $value
     * @psalm-param PaymentMethodInfoCustomFieldAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoCustomFieldAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoCustomFieldAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoCustomFieldAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoCustomFieldAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoCustomFieldAddedMessagePayload $data */
                $data = PaymentMethodInfoCustomFieldAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
