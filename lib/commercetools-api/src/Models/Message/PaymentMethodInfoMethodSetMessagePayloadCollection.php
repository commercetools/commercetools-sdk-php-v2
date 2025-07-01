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
 * @extends MessagePayloadCollection<PaymentMethodInfoMethodSetMessagePayload>
 * @method PaymentMethodInfoMethodSetMessagePayload current()
 * @method PaymentMethodInfoMethodSetMessagePayload end()
 * @method PaymentMethodInfoMethodSetMessagePayload at($offset)
 */
class PaymentMethodInfoMethodSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodInfoMethodSetMessagePayload $value
     * @psalm-param PaymentMethodInfoMethodSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoMethodSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoMethodSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoMethodSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoMethodSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoMethodSetMessagePayload $data */
                $data = PaymentMethodInfoMethodSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
