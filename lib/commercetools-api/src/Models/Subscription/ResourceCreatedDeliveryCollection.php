<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Subscription\DeliveryPayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DeliveryPayloadCollection<ResourceCreatedDelivery>
 * @method ResourceCreatedDelivery current()
 * @method ResourceCreatedDelivery end()
 * @method ResourceCreatedDelivery at($offset)
 */
class ResourceCreatedDeliveryCollection extends DeliveryPayloadCollection
{
    /**
     * @psalm-assert ResourceCreatedDelivery $value
     * @psalm-param ResourceCreatedDelivery|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ResourceCreatedDeliveryCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceCreatedDelivery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceCreatedDelivery
     */
    protected function mapper()
    {
        return function (?int $index): ?ResourceCreatedDelivery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ResourceCreatedDelivery $data */
                $data = ResourceCreatedDeliveryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
