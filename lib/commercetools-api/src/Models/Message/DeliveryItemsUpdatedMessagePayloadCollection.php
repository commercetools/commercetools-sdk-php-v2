<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DeliveryItemsUpdatedMessagePayload>
 *
 * @method DeliveryItemsUpdatedMessagePayload current()
 * @method DeliveryItemsUpdatedMessagePayload at($offset)
 */
class DeliveryItemsUpdatedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryItemsUpdatedMessagePayload $value
     * @psalm-param DeliveryItemsUpdatedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
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
                $data = DeliveryItemsUpdatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
