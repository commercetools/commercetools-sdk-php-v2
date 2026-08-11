<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntrySetReservationExpirationInMinutesAction extends InventoryEntryUpdateAction
{
    public const FIELD_RESERVATION_EXPIRATION_IN_MINUTES = 'reservationExpirationInMinutes';

    /**
     * <p>Value to set, must be a positive integer. If omitted, any existing value is removed.</p>
     *

     * @return null|int
     */
    public function getReservationExpirationInMinutes();

    /**
     * @param ?int $reservationExpirationInMinutes
     */
    public function setReservationExpirationInMinutes(?int $reservationExpirationInMinutes): void;
}
