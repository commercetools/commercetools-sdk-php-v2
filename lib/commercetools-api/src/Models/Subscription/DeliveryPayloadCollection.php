<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Subscription\SubscriptionNotificationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of DeliveryPayload
 * @extends SubscriptionNotificationCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method DeliveryPayload current()
 * @method DeliveryPayload end()
 * @method DeliveryPayload at($offset)
 */
class DeliveryPayloadCollection extends SubscriptionNotificationCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryPayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryPayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryPayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = DeliveryPayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
