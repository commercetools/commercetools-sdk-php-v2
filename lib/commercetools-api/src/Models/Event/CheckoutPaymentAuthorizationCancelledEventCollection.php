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
 * @extends EventCollection<CheckoutPaymentAuthorizationCancelledEvent>
 * @method CheckoutPaymentAuthorizationCancelledEvent current()
 * @method CheckoutPaymentAuthorizationCancelledEvent end()
 * @method CheckoutPaymentAuthorizationCancelledEvent at($offset)
 */
class CheckoutPaymentAuthorizationCancelledEventCollection extends EventCollection
{
    /**
     * @psalm-assert CheckoutPaymentAuthorizationCancelledEvent $value
     * @psalm-param CheckoutPaymentAuthorizationCancelledEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CheckoutPaymentAuthorizationCancelledEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof CheckoutPaymentAuthorizationCancelledEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CheckoutPaymentAuthorizationCancelledEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?CheckoutPaymentAuthorizationCancelledEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CheckoutPaymentAuthorizationCancelledEvent $data */
                $data = CheckoutPaymentAuthorizationCancelledEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
