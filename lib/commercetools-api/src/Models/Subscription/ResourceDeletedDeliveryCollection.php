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
 * @extends DeliveryPayloadCollection<ResourceDeletedDelivery>
 * @method ResourceDeletedDelivery current()
 * @method ResourceDeletedDelivery end()
 * @method ResourceDeletedDelivery at($offset)
 */
class ResourceDeletedDeliveryCollection extends DeliveryPayloadCollection
{
    /**
     * @psalm-assert ResourceDeletedDelivery $value
     * @psalm-param ResourceDeletedDelivery|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ResourceDeletedDeliveryCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceDeletedDelivery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceDeletedDelivery
     */
    protected function mapper()
    {
        return function (?int $index): ?ResourceDeletedDelivery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ResourceDeletedDelivery $data */
                $data = ResourceDeletedDeliveryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
