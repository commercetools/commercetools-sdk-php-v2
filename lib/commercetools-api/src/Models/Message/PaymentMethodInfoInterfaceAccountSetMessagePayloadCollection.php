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
 * @extends MessagePayloadCollection<PaymentMethodInfoInterfaceAccountSetMessagePayload>
 * @method PaymentMethodInfoInterfaceAccountSetMessagePayload current()
 * @method PaymentMethodInfoInterfaceAccountSetMessagePayload end()
 * @method PaymentMethodInfoInterfaceAccountSetMessagePayload at($offset)
 */
class PaymentMethodInfoInterfaceAccountSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodInfoInterfaceAccountSetMessagePayload $value
     * @psalm-param PaymentMethodInfoInterfaceAccountSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInfoInterfaceAccountSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInfoInterfaceAccountSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInfoInterfaceAccountSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInfoInterfaceAccountSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInfoInterfaceAccountSetMessagePayload $data */
                $data = PaymentMethodInfoInterfaceAccountSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
