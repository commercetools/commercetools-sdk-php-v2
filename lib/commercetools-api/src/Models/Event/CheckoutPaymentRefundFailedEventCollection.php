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
 * @extends EventCollection<CheckoutPaymentRefundFailedEvent>
 * @method CheckoutPaymentRefundFailedEvent current()
 * @method CheckoutPaymentRefundFailedEvent end()
 * @method CheckoutPaymentRefundFailedEvent at($offset)
 */
class CheckoutPaymentRefundFailedEventCollection extends EventCollection
{
    /**
     * @psalm-assert CheckoutPaymentRefundFailedEvent $value
     * @psalm-param CheckoutPaymentRefundFailedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CheckoutPaymentRefundFailedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof CheckoutPaymentRefundFailedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CheckoutPaymentRefundFailedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?CheckoutPaymentRefundFailedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CheckoutPaymentRefundFailedEvent $data */
                $data = CheckoutPaymentRefundFailedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
