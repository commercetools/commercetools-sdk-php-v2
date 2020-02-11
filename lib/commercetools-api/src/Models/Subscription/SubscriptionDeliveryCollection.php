<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SubscriptionDelivery>
 * @method SubscriptionDelivery current()
 * @method SubscriptionDelivery at($offset)
 */
class SubscriptionDeliveryCollection extends MapperSequence
{
    /**
     * @psalm-assert SubscriptionDelivery $value
     * @psalm-param SubscriptionDelivery|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SubscriptionDeliveryCollection
     */
    public function add($value)
    {
        if (!$value instanceof SubscriptionDelivery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubscriptionDelivery
     */
    protected function mapper()
    {
        return function (int $index): ?SubscriptionDelivery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SubscriptionDeliveryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
