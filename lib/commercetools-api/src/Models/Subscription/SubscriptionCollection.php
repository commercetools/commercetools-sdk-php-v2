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
 * @extends MapperSequence<Subscription>
 *
 * @method Subscription current()
 * @method Subscription at($offset)
 */
class SubscriptionCollection extends MapperSequence
{
    /**
     * @psalm-assert Subscription $value
     * @psalm-param Subscription|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return SubscriptionCollection
     */
    public function add($value)
    {
        if (!$value instanceof Subscription) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Subscription
     */
    protected function mapper()
    {
        return function (int $index): ?Subscription {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SubscriptionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
