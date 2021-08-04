<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<PaymentInteractionAddedMessage>
 * @method PaymentInteractionAddedMessage current()
 * @method PaymentInteractionAddedMessage end()
 * @method PaymentInteractionAddedMessage at($offset)
 */
class PaymentInteractionAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentInteractionAddedMessage $value
     * @psalm-param PaymentInteractionAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentInteractionAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentInteractionAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentInteractionAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentInteractionAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentInteractionAddedMessage $data */
                $data = PaymentInteractionAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
