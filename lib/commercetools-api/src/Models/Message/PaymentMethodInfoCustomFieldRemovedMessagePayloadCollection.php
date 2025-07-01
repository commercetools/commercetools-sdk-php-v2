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
 * @extends MessagePayloadCollection<PaymentMethodInfoCustomFieldRemovedMessagePayload>
 * @method PaymentMethodInfoCustomFieldRemovedMessagePayload current()
 * @method PaymentMethodInfoCustomFieldRemovedMessagePayload end()
 * @method PaymentMethodInfoCustomFieldRemovedMessagePayload at($offset)
 */
class PaymentMethodInfoCustomFieldRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodInfoCustomFieldRemovedMessagePayload $value
     * @psalm-param PaymentMethodInfoCustomFieldRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoCustomFieldRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoCustomFieldRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoCustomFieldRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoCustomFieldRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoCustomFieldRemovedMessagePayload $data */
                $data = PaymentMethodInfoCustomFieldRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
