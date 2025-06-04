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
 * @extends EventCollection<CheckoutPaymentCancelAuthorizationFailedEvent>
 * @method CheckoutPaymentCancelAuthorizationFailedEvent current()
 * @method CheckoutPaymentCancelAuthorizationFailedEvent end()
 * @method CheckoutPaymentCancelAuthorizationFailedEvent at($offset)
 */
class CheckoutPaymentCancelAuthorizationFailedEventCollection extends EventCollection
{
    /**
     * @psalm-assert CheckoutPaymentCancelAuthorizationFailedEvent $value
     * @psalm-param CheckoutPaymentCancelAuthorizationFailedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CheckoutPaymentCancelAuthorizationFailedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof CheckoutPaymentCancelAuthorizationFailedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CheckoutPaymentCancelAuthorizationFailedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?CheckoutPaymentCancelAuthorizationFailedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CheckoutPaymentCancelAuthorizationFailedEvent $data */
                $data = CheckoutPaymentCancelAuthorizationFailedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
