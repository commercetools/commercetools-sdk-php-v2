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
 * @extends MessagePayloadCollection<ParcelTrackingDataUpdatedMessagePayload>
 * @method ParcelTrackingDataUpdatedMessagePayload current()
 * @method ParcelTrackingDataUpdatedMessagePayload at($offset)
 */
class ParcelTrackingDataUpdatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ParcelTrackingDataUpdatedMessagePayload $value
     * @psalm-param ParcelTrackingDataUpdatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelTrackingDataUpdatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelTrackingDataUpdatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelTrackingDataUpdatedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ParcelTrackingDataUpdatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ParcelTrackingDataUpdatedMessagePayload $data */
                $data = ParcelTrackingDataUpdatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
