<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectSetReleaseExpiredReservationsAction extends ProjectUpdateAction
{
    public const FIELD_RELEASE_EXPIRED_RESERVATIONS = 'releaseExpiredReservations';

    /**
     * <p>Value to set.</p>
     *

     * @return null|bool
     */
    public function getReleaseExpiredReservations();

    /**
     * @param ?bool $releaseExpiredReservations
     */
    public function setReleaseExpiredReservations(?bool $releaseExpiredReservations): void;
}
