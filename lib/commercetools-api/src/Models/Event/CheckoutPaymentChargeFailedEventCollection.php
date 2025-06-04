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
 * @extends EventCollection<CheckoutPaymentChargeFailedEvent>
 * @method CheckoutPaymentChargeFailedEvent current()
 * @method CheckoutPaymentChargeFailedEvent end()
 * @method CheckoutPaymentChargeFailedEvent at($offset)
 */
class CheckoutPaymentChargeFailedEventCollection extends EventCollection
{
    /**
     * @psalm-assert CheckoutPaymentChargeFailedEvent $value
     * @psalm-param CheckoutPaymentChargeFailedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CheckoutPaymentChargeFailedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof CheckoutPaymentChargeFailedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CheckoutPaymentChargeFailedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?CheckoutPaymentChargeFailedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CheckoutPaymentChargeFailedEvent $data */
                $data = CheckoutPaymentChargeFailedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
