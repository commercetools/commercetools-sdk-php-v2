<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<DeliveryItemsUpdatedMessagePayload>
 * @method DeliveryItemsUpdatedMessagePayload current()
 * @method DeliveryItemsUpdatedMessagePayload at($offset)
 */
class DeliveryItemsUpdatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert DeliveryItemsUpdatedMessagePayload $value
     * @psalm-param DeliveryItemsUpdatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryItemsUpdatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryItemsUpdatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryItemsUpdatedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryItemsUpdatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryItemsUpdatedMessagePayload $data */
                $data = DeliveryItemsUpdatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
