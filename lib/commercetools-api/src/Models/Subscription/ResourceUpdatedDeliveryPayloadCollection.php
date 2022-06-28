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
 * @extends DeliveryPayloadCollection<ResourceUpdatedDeliveryPayload>
 * @method ResourceUpdatedDeliveryPayload current()
 * @method ResourceUpdatedDeliveryPayload end()
 * @method ResourceUpdatedDeliveryPayload at($offset)
 */
class ResourceUpdatedDeliveryPayloadCollection extends DeliveryPayloadCollection
{
    /**
     * @psalm-assert ResourceUpdatedDeliveryPayload $value
     * @psalm-param ResourceUpdatedDeliveryPayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ResourceUpdatedDeliveryPayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceUpdatedDeliveryPayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceUpdatedDeliveryPayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ResourceUpdatedDeliveryPayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ResourceUpdatedDeliveryPayload $data */
                $data = ResourceUpdatedDeliveryPayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
