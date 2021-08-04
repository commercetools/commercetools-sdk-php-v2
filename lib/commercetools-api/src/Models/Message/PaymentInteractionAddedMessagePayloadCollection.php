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
 * @extends MessagePayloadCollection<PaymentInteractionAddedMessagePayload>
 * @method PaymentInteractionAddedMessagePayload current()
 * @method PaymentInteractionAddedMessagePayload at($offset)
 */
class PaymentInteractionAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentInteractionAddedMessagePayload $value
     * @psalm-param PaymentInteractionAddedMessagePayload|stdClass $value
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
        return function (?int $index): ?PaymentInteractionAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentInteractionAddedMessagePayload $data */
                $data = PaymentInteractionAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
