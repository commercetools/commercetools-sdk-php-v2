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
 * @extends EventCollection<CheckoutPaymentAuthorizedEvent>
 * @method CheckoutPaymentAuthorizedEvent current()
 * @method CheckoutPaymentAuthorizedEvent end()
 * @method CheckoutPaymentAuthorizedEvent at($offset)
 */
class CheckoutPaymentAuthorizedEventCollection extends EventCollection
{
    /**
     * @psalm-assert CheckoutPaymentAuthorizedEvent $value
     * @psalm-param CheckoutPaymentAuthorizedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CheckoutPaymentAuthorizedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof CheckoutPaymentAuthorizedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CheckoutPaymentAuthorizedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?CheckoutPaymentAuthorizedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CheckoutPaymentAuthorizedEvent $data */
                $data = CheckoutPaymentAuthorizedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
