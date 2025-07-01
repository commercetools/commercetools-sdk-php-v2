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
 * @extends MessagePayloadCollection<PaymentMethodInfoCustomTypeSetMessagePayload>
 * @method PaymentMethodInfoCustomTypeSetMessagePayload current()
 * @method PaymentMethodInfoCustomTypeSetMessagePayload end()
 * @method PaymentMethodInfoCustomTypeSetMessagePayload at($offset)
 */
class PaymentMethodInfoCustomTypeSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodInfoCustomTypeSetMessagePayload $value
     * @psalm-param PaymentMethodInfoCustomTypeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoCustomTypeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoCustomTypeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoCustomTypeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoCustomTypeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoCustomTypeSetMessagePayload $data */
                $data = PaymentMethodInfoCustomTypeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
