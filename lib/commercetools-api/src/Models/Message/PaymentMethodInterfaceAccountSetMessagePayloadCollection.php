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
 * @extends MessagePayloadCollection<PaymentMethodInterfaceAccountSetMessagePayload>
 * @method PaymentMethodInterfaceAccountSetMessagePayload current()
 * @method PaymentMethodInterfaceAccountSetMessagePayload end()
 * @method PaymentMethodInterfaceAccountSetMessagePayload at($offset)
 */
class PaymentMethodInterfaceAccountSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentMethodInterfaceAccountSetMessagePayload $value
     * @psalm-param PaymentMethodInterfaceAccountSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodInterfaceAccountSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodInterfaceAccountSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodInterfaceAccountSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodInterfaceAccountSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodInterfaceAccountSetMessagePayload $data */
                $data = PaymentMethodInterfaceAccountSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
