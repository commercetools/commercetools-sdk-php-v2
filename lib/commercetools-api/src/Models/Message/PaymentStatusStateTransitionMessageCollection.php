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
 * @extends MessageCollection<PaymentStatusStateTransitionMessage>
 * @method PaymentStatusStateTransitionMessage current()
 * @method PaymentStatusStateTransitionMessage end()
 * @method PaymentStatusStateTransitionMessage at($offset)
 */
class PaymentStatusStateTransitionMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentStatusStateTransitionMessage $value
     * @psalm-param PaymentStatusStateTransitionMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentStatusStateTransitionMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentStatusStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentStatusStateTransitionMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentStatusStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentStatusStateTransitionMessage $data */
                $data = PaymentStatusStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
