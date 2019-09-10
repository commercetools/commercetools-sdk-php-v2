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
 * @extends MapperSequence<PaymentInteractionAddedMessagePayload>
 *
 * @method PaymentInteractionAddedMessagePayload current()
 * @method PaymentInteractionAddedMessagePayload at($offset)
 */
class PaymentInteractionAddedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentInteractionAddedMessagePayload $value
     * @psalm-param PaymentInteractionAddedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentInteractionAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentInteractionAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentInteractionAddedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentInteractionAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentInteractionAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
