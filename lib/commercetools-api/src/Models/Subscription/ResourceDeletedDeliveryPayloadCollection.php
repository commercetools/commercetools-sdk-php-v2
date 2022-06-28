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
 * @extends DeliveryPayloadCollection<ResourceDeletedDeliveryPayload>
 * @method ResourceDeletedDeliveryPayload current()
 * @method ResourceDeletedDeliveryPayload end()
 * @method ResourceDeletedDeliveryPayload at($offset)
 */
class ResourceDeletedDeliveryPayloadCollection extends DeliveryPayloadCollection
{
    /**
     * @psalm-assert ResourceDeletedDeliveryPayload $value
     * @psalm-param ResourceDeletedDeliveryPayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ResourceDeletedDeliveryPayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResourceDeletedDeliveryPayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceDeletedDeliveryPayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ResourceDeletedDeliveryPayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ResourceDeletedDeliveryPayload $data */
                $data = ResourceDeletedDeliveryPayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
