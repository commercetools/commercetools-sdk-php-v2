<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryConfiguration extends JsonObject
{
    public const FIELD_RESERVATION_EXPIRATION_IN_MINUTES = 'reservationExpirationInMinutes';
    public const FIELD_RELEASE_EXPIRED_RESERVATIONS = 'releaseExpiredReservations';

    /**
     * <p>The number of minutes after which a <a href="ctp:api:type:Reservation">Reservation</a> expires. To use the <a href="ctp:api:type:InventoryMode">ReserveOnCart</a> inventory mode, this field must be set.</p>
     *

     * @return null|int
     */
    public function getReservationExpirationInMinutes();

    /**
     * <p>If set to <code>true</code>, <a href="ctp:api:type:Reservation">Reservations</a> are marked as <code>Expired</code> once their
     * <code>reservationExpirationInMinutes</code> is reached. The reserved inventory is then made available. If set to <code>false</code>, tracking Line Items with expired reservations becomes your responsibility.</p>
     *

     * @return null|bool
     */
    public function getReleaseExpiredReservations();

    /**
     * @param ?int $reservationExpirationInMinutes
     */
    public function setReservationExpirationInMinutes(?int $reservationExpirationInMinutes): void;

    /**
     * @param ?bool $releaseExpiredReservations
     */
    public function setReleaseExpiredReservations(?bool $releaseExpiredReservations): void;
}
