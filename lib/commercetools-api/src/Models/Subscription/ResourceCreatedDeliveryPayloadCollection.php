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
 * @extends DeliveryPayloadCollection<ResourceCreatedDeliveryPayload>
 * @method ResourceCreatedDeliveryPayload current()
 * @method ResourceCreatedDeliveryPayload end()
 * @method ResourceCreatedDeliveryPayload at($offset)
 */
class ResourceCreatedDeliveryPayloadCollection extends DeliveryPayloadCollection
{
    /**
     * @psalm-assert ResourceCreatedDeliveryPayload $value
     * @psalm-param ResourceCreatedDeliveryPayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ResourceCreatedDeliveryPayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceCreatedDeliveryPayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceCreatedDeliveryPayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ResourceCreatedDeliveryPayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ResourceCreatedDeliveryPayload $data */
                $data = ResourceCreatedDeliveryPayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
