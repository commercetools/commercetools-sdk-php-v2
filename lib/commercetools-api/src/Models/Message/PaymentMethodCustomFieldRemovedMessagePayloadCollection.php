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
 * @extends MessagePayloadCollection<PaymentMethodCustomFieldRemovedMessagePayload>
 * @method PaymentMethodCustomFieldRemovedMessagePayload current()
 * @method PaymentMethodCustomFieldRemovedMessagePayload end()
 * @method PaymentMethodCustomFieldRemovedMessagePayload at($offset)
 */
class PaymentMethodCustomFieldRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodCustomFieldRemovedMessagePayload $value
     * @psalm-param PaymentMethodCustomFieldRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCustomFieldRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCustomFieldRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCustomFieldRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCustomFieldRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCustomFieldRemovedMessagePayload $data */
                $data = PaymentMethodCustomFieldRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
