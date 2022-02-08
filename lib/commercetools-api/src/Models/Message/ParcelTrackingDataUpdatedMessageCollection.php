<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessageCollection<ParcelTrackingDataUpdatedMessage>
 * @method ParcelTrackingDataUpdatedMessage current()
 * @method ParcelTrackingDataUpdatedMessage end()
 * @method ParcelTrackingDataUpdatedMessage at($offset)
 */
class ParcelTrackingDataUpdatedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert ParcelTrackingDataUpdatedMessage $value
     * @psalm-param ParcelTrackingDataUpdatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelTrackingDataUpdatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelTrackingDataUpdatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelTrackingDataUpdatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ParcelTrackingDataUpdatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ParcelTrackingDataUpdatedMessage $data */
                $data = ParcelTrackingDataUpdatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
