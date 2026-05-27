<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InventoryEntryReservationExpirationInMinutesSetMessagePayload>
 */
final class InventoryEntryReservationExpirationInMinutesSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $newReservationExpirationInMinutes;

    /**

     * @var ?int
     */
    private $oldReservationExpirationInMinutes;

    /**
     * <p><code>reservationExpirationInMinutes</code> value of the <a href="ctp:api:type:InventoryEntry">Inventory Entry</a> after the <a href="ctp:api:type:InventoryEntrySetReservationExpirationInMinutesAction">Set Reservation Expiration In Minutes</a> update action.</p>
     *

     * @return null|int
     */
    public function getNewReservationExpirationInMinutes()
    {
        return $this->newReservationExpirationInMinutes;
    }

    /**
     * <p><code>reservationExpirationInMinutes</code> value of the <a href="ctp:api:type:InventoryEntry">Inventory Entry</a> before the <a href="ctp:api:type:InventoryEntrySetReservationExpirationInMinutesAction">Set Reservation Expiration In Minutes</a> update action.</p>
     *

     * @return null|int
     */
    public function getOldReservationExpirationInMinutes()
    {
        return $this->oldReservationExpirationInMinutes;
    }

    /**
     * @param ?int $newReservationExpirationInMinutes
     * @return $this
     */
    public function withNewReservationExpirationInMinutes(?int $newReservationExpirationInMinutes)
    {
        $this->newReservationExpirationInMinutes = $newReservationExpirationInMinutes;

        return $this;
    }

    /**
     * @param ?int $oldReservationExpirationInMinutes
     * @return $this
     */
    public function withOldReservationExpirationInMinutes(?int $oldReservationExpirationInMinutes)
    {
        $this->oldReservationExpirationInMinutes = $oldReservationExpirationInMinutes;

        return $this;
    }


    public function build(): InventoryEntryReservationExpirationInMinutesSetMessagePayload
    {
        return new InventoryEntryReservationExpirationInMinutesSetMessagePayloadModel(
            $this->newReservationExpirationInMinutes,
            $this->oldReservationExpirationInMinutes
        );
    }

    public static function of(): InventoryEntryReservationExpirationInMinutesSetMessagePayloadBuilder
    {
        return new self();
    }
}
