<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectSetReservationExpirationInMinutesAction>
 */
final class ProjectSetReservationExpirationInMinutesActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $reservationExpirationInMinutes;

    /**
     * <p>Value to set.</p>
     *

     * @return null|int
     */
    public function getReservationExpirationInMinutes()
    {
        return $this->reservationExpirationInMinutes;
    }

    /**
     * @param ?int $reservationExpirationInMinutes
     * @return $this
     */
    public function withReservationExpirationInMinutes(?int $reservationExpirationInMinutes)
    {
        $this->reservationExpirationInMinutes = $reservationExpirationInMinutes;

        return $this;
    }


    public function build(): ProjectSetReservationExpirationInMinutesAction
    {
        return new ProjectSetReservationExpirationInMinutesActionModel(
            $this->reservationExpirationInMinutes
        );
    }

    public static function of(): ProjectSetReservationExpirationInMinutesActionBuilder
    {
        return new self();
    }
}
