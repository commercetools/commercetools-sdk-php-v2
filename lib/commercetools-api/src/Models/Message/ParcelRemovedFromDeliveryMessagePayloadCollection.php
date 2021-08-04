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
 * @extends MessagePayloadCollection<ParcelRemovedFromDeliveryMessagePayload>
 * @method ParcelRemovedFromDeliveryMessagePayload current()
 * @method ParcelRemovedFromDeliveryMessagePayload at($offset)
 */
class ParcelRemovedFromDeliveryMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ParcelRemovedFromDeliveryMessagePayload $value
     * @psalm-param ParcelRemovedFromDeliveryMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelRemovedFromDeliveryMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelRemovedFromDeliveryMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelRemovedFromDeliveryMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ParcelRemovedFromDeliveryMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ParcelRemovedFromDeliveryMessagePayload $data */
                $data = ParcelRemovedFromDeliveryMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
