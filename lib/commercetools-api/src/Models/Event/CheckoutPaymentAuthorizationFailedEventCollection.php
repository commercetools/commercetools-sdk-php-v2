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
 * @extends EventCollection<CheckoutPaymentAuthorizationFailedEvent>
 * @method CheckoutPaymentAuthorizationFailedEvent current()
 * @method CheckoutPaymentAuthorizationFailedEvent end()
 * @method CheckoutPaymentAuthorizationFailedEvent at($offset)
 */
class CheckoutPaymentAuthorizationFailedEventCollection extends EventCollection
{
    /**
     * @psalm-assert CheckoutPaymentAuthorizationFailedEvent $value
     * @psalm-param CheckoutPaymentAuthorizationFailedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CheckoutPaymentAuthorizationFailedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof CheckoutPaymentAuthorizationFailedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CheckoutPaymentAuthorizationFailedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?CheckoutPaymentAuthorizationFailedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CheckoutPaymentAuthorizationFailedEvent $data */
                $data = CheckoutPaymentAuthorizationFailedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
