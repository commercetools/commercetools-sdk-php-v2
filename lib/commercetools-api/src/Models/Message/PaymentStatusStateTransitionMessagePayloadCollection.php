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
 * @extends MessagePayloadCollection<PaymentStatusStateTransitionMessagePayload>
 * @method PaymentStatusStateTransitionMessagePayload current()
 * @method PaymentStatusStateTransitionMessagePayload end()
 * @method PaymentStatusStateTransitionMessagePayload at($offset)
 */
class PaymentStatusStateTransitionMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert PaymentStatusStateTransitionMessagePayload $value
     * @psalm-param PaymentStatusStateTransitionMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentStatusStateTransitionMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentStatusStateTransitionMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentStatusStateTransitionMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentStatusStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentStatusStateTransitionMessagePayload $data */
                $data = PaymentStatusStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
