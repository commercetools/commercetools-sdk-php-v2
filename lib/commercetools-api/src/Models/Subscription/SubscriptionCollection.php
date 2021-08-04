<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<Subscription>
 * @method Subscription current()
 * @method Subscription at($offset)
 */
class SubscriptionCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert Subscription $value
     * @psalm-param Subscription|stdClass $value
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
        return function (?int $index): ?Subscription {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Subscription $data */
                $data = SubscriptionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
