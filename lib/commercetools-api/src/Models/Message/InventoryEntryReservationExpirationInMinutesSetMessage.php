<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntryReservationExpirationInMinutesSetMessage extends Message
{
    public const FIELD_NEW_RESERVATION_EXPIRATION_IN_MINUTES = 'newReservationExpirationInMinutes';
    public const FIELD_OLD_RESERVATION_EXPIRATION_IN_MINUTES = 'oldReservationExpirationInMinutes';

    /**
     * <p><code>reservationExpirationInMinutes</code> value of the <a href="ctp:api:type:InventoryEntry">Inventory Entry</a> after the <a href="ctp:api:type:InventoryEntrySetReservationExpirationInMinutesAction">Set Reservation Expiration In Minutes</a> update action.</p>
     *

     * @return null|int
     */
    public function getNewReservationExpirationInMinutes();

    /**
     * <p><code>reservationExpirationInMinutes</code> value of the <a href="ctp:api:type:InventoryEntry">Inventory Entry</a> before the <a href="ctp:api:type:InventoryEntrySetReservationExpirationInMinutesAction">Set Reservation Expiration In Minutes</a> update action.</p>
     *

     * @return null|int
     */
    public function getOldReservationExpirationInMinutes();

    /**
     * @param ?int $newReservationExpirationInMinutes
     */
    public function setNewReservationExpirationInMinutes(?int $newReservationExpirationInMinutes): void;

    /**
     * @param ?int $oldReservationExpirationInMinutes
     */
    public function setOldReservationExpirationInMinutes(?int $oldReservationExpirationInMinutes): void;
}
