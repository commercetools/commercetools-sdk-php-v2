<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Api\Models\Event\EventCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends EventCollection<CheckoutPaymentRefundedEvent>
 * @method CheckoutPaymentRefundedEvent current()
 * @method CheckoutPaymentRefundedEvent end()
 * @method CheckoutPaymentRefundedEvent at($offset)
 */
class CheckoutPaymentRefundedEventCollection extends EventCollection
{
    /**
     * @psalm-assert CheckoutPaymentRefundedEvent $value
     * @psalm-param CheckoutPaymentRefundedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CheckoutPaymentRefundedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof CheckoutPaymentRefundedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CheckoutPaymentRefundedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?CheckoutPaymentRefundedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CheckoutPaymentRefundedEvent $data */
                $data = CheckoutPaymentRefundedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
