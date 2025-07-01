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
 * @extends MessagePayloadCollection<PaymentMethodDeletedMessagePayload>
 * @method PaymentMethodDeletedMessagePayload current()
 * @method PaymentMethodDeletedMessagePayload end()
 * @method PaymentMethodDeletedMessagePayload at($offset)
 */
class PaymentMethodDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodDeletedMessagePayload $value
     * @psalm-param PaymentMethodDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodDeletedMessagePayload $data */
                $data = PaymentMethodDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
