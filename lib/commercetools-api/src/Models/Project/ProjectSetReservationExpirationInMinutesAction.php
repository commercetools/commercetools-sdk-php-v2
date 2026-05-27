<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectSetReservationExpirationInMinutesAction extends ProjectUpdateAction
{
    public const FIELD_RESERVATION_EXPIRATION_IN_MINUTES = 'reservationExpirationInMinutes';

    /**
     * <p>Value to set.</p>
     *

     * @return null|int
     */
    public function getReservationExpirationInMinutes();

    /**
     * @param ?int $reservationExpirationInMinutes
     */
    public function setReservationExpirationInMinutes(?int $reservationExpirationInMinutes): void;
}
