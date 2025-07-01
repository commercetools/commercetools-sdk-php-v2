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
 * @extends MessagePayloadCollection<PaymentMethodNameSetMessagePayload>
 * @method PaymentMethodNameSetMessagePayload current()
 * @method PaymentMethodNameSetMessagePayload end()
 * @method PaymentMethodNameSetMessagePayload at($offset)
 */
class PaymentMethodNameSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodNameSetMessagePayload $value
     * @psalm-param PaymentMethodNameSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodNameSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodNameSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodNameSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodNameSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodNameSetMessagePayload $data */
                $data = PaymentMethodNameSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
