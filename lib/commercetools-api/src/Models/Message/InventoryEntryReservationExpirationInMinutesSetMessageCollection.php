<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<InventoryEntryReservationExpirationInMinutesSetMessage>
 * @method InventoryEntryReservationExpirationInMinutesSetMessage current()
 * @method InventoryEntryReservationExpirationInMinutesSetMessage end()
 * @method InventoryEntryReservationExpirationInMinutesSetMessage at($offset)
 */
class InventoryEntryReservationExpirationInMinutesSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert InventoryEntryReservationExpirationInMinutesSetMessage $value
     * @psalm-param InventoryEntryReservationExpirationInMinutesSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryReservationExpirationInMinutesSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryReservationExpirationInMinutesSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryReservationExpirationInMinutesSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryReservationExpirationInMinutesSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryReservationExpirationInMinutesSetMessage $data */
                $data = InventoryEntryReservationExpirationInMinutesSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
