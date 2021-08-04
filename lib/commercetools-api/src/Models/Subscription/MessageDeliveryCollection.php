<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Subscription\SubscriptionDeliveryCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends SubscriptionDeliveryCollection<MessageDelivery>
 * @method MessageDelivery current()
 * @method MessageDelivery end()
 * @method MessageDelivery at($offset)
 */
class MessageDeliveryCollection extends SubscriptionDeliveryCollection
{
    /**
     * @psalm-assert MessageDelivery $value
     * @psalm-param MessageDelivery|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MessageDeliveryCollection
     */
    public function add($value)
    {
        if (!$value instanceof MessageDelivery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MessageDelivery
     */
    protected function mapper()
    {
        return function (?int $index): ?MessageDelivery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MessageDelivery $data */
                $data = MessageDeliveryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
