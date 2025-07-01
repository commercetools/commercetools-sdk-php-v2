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
 * @extends MessagePayloadCollection<PaymentMethodCustomFieldAddedMessagePayload>
 * @method PaymentMethodCustomFieldAddedMessagePayload current()
 * @method PaymentMethodCustomFieldAddedMessagePayload end()
 * @method PaymentMethodCustomFieldAddedMessagePayload at($offset)
 */
class PaymentMethodCustomFieldAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodCustomFieldAddedMessagePayload $value
     * @psalm-param PaymentMethodCustomFieldAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCustomFieldAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCustomFieldAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCustomFieldAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCustomFieldAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCustomFieldAddedMessagePayload $data */
                $data = PaymentMethodCustomFieldAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
