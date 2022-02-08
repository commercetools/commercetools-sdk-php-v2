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
 * @extends OrderMessageCollection<ParcelRemovedFromDeliveryMessage>
 * @method ParcelRemovedFromDeliveryMessage current()
 * @method ParcelRemovedFromDeliveryMessage end()
 * @method ParcelRemovedFromDeliveryMessage at($offset)
 */
class ParcelRemovedFromDeliveryMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert ParcelRemovedFromDeliveryMessage $value
     * @psalm-param ParcelRemovedFromDeliveryMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelRemovedFromDeliveryMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelRemovedFromDeliveryMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelRemovedFromDeliveryMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ParcelRemovedFromDeliveryMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ParcelRemovedFromDeliveryMessage $data */
                $data = ParcelRemovedFromDeliveryMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
