<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentStatusInterfaceCodeSetMessagePayload>
 * @method PaymentStatusInterfaceCodeSetMessagePayload current()
 * @method PaymentStatusInterfaceCodeSetMessagePayload at($offset)
 */
class PaymentStatusInterfaceCodeSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentStatusInterfaceCodeSetMessagePayload $value
     * @psalm-param PaymentStatusInterfaceCodeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentStatusInterfaceCodeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentStatusInterfaceCodeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentStatusInterfaceCodeSetMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentStatusInterfaceCodeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentStatusInterfaceCodeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
