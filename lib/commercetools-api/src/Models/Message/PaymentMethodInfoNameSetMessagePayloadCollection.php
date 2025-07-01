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
 * @extends MessagePayloadCollection<PaymentMethodInfoNameSetMessagePayload>
 * @method PaymentMethodInfoNameSetMessagePayload current()
 * @method PaymentMethodInfoNameSetMessagePayload end()
 * @method PaymentMethodInfoNameSetMessagePayload at($offset)
 */
class PaymentMethodInfoNameSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodInfoNameSetMessagePayload $value
     * @psalm-param PaymentMethodInfoNameSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoNameSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoNameSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoNameSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoNameSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoNameSetMessagePayload $data */
                $data = PaymentMethodInfoNameSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
