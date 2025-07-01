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
 * @extends MessagePayloadCollection<PaymentMethodCreatedMessagePayload>
 * @method PaymentMethodCreatedMessagePayload current()
 * @method PaymentMethodCreatedMessagePayload end()
 * @method PaymentMethodCreatedMessagePayload at($offset)
 */
class PaymentMethodCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodCreatedMessagePayload $value
     * @psalm-param PaymentMethodCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodCreatedMessagePayload $data */
                $data = PaymentMethodCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
