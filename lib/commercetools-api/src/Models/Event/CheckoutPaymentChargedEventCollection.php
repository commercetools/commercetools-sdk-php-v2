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
 * @extends EventCollection<CheckoutPaymentChargedEvent>
 * @method CheckoutPaymentChargedEvent current()
 * @method CheckoutPaymentChargedEvent end()
 * @method CheckoutPaymentChargedEvent at($offset)
 */
class CheckoutPaymentChargedEventCollection extends EventCollection
{
    /**
     * @psalm-assert CheckoutPaymentChargedEvent $value
     * @psalm-param CheckoutPaymentChargedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CheckoutPaymentChargedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof CheckoutPaymentChargedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CheckoutPaymentChargedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?CheckoutPaymentChargedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CheckoutPaymentChargedEvent $data */
                $data = CheckoutPaymentChargedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
