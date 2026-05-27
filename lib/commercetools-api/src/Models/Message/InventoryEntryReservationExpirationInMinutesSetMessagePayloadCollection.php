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
 * @extends MessagePayloadCollection<InventoryEntryReservationExpirationInMinutesSetMessagePayload>
 * @method InventoryEntryReservationExpirationInMinutesSetMessagePayload current()
 * @method InventoryEntryReservationExpirationInMinutesSetMessagePayload end()
 * @method InventoryEntryReservationExpirationInMinutesSetMessagePayload at($offset)
 */
class InventoryEntryReservationExpirationInMinutesSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert InventoryEntryReservationExpirationInMinutesSetMessagePayload $value
     * @psalm-param InventoryEntryReservationExpirationInMinutesSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryReservationExpirationInMinutesSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryReservationExpirationInMinutesSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryReservationExpirationInMinutesSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryReservationExpirationInMinutesSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryReservationExpirationInMinutesSetMessagePayload $data */
                $data = InventoryEntryReservationExpirationInMinutesSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
