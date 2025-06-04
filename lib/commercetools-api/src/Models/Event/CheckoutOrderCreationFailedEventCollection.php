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
 * @extends EventCollection<CheckoutOrderCreationFailedEvent>
 * @method CheckoutOrderCreationFailedEvent current()
 * @method CheckoutOrderCreationFailedEvent end()
 * @method CheckoutOrderCreationFailedEvent at($offset)
 */
class CheckoutOrderCreationFailedEventCollection extends EventCollection
{
    /**
     * @psalm-assert CheckoutOrderCreationFailedEvent $value
     * @psalm-param CheckoutOrderCreationFailedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CheckoutOrderCreationFailedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof CheckoutOrderCreationFailedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CheckoutOrderCreationFailedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?CheckoutOrderCreationFailedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CheckoutOrderCreationFailedEvent $data */
                $data = CheckoutOrderCreationFailedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
