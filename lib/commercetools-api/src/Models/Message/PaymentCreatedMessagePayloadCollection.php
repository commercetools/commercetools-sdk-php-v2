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
 * @extends MapperSequence<PaymentCreatedMessagePayload>
 * @method PaymentCreatedMessagePayload current()
 * @method PaymentCreatedMessagePayload at($offset)
 */
class PaymentCreatedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentCreatedMessagePayload $value
     * @psalm-param PaymentCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
