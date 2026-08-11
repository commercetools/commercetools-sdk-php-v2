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
 * @implements Builder<InventoryConfiguration>
 */
final class InventoryConfigurationBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $reservationExpirationInMinutes;

    /**

     * @var ?bool
     */
    private $releaseExpiredReservations;

    /**
     * <p>The number of minutes after which a <a href="ctp:api:type:Reservation">Reservation</a> expires. To use the <a href="ctp:api:type:InventoryMode">ReserveOnCart</a> inventory mode, this field must be set.</p>
     *

     * @return null|int
     */
    public function getReservationExpirationInMinutes()
    {
        return $this->reservationExpirationInMinutes;
    }

    /**
     * <p>Whether <a href="ctp:api:type:Reservation">Reservations</a> are marked as <code>Expired</code> once their
     * <code>reservationExpirationInMinutes</code> is reached. The reserved inventory is then made available. If set to <code>false</code>, tracking Line Items with expired reservations becomes your responsibility.</p>
     *

     * @return null|bool
     */
    public function getReleaseExpiredReservations()
    {
        return $this->releaseExpiredReservations;
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

    /**
     * @param ?bool $releaseExpiredReservations
     * @return $this
     */
    public function withReleaseExpiredReservations(?bool $releaseExpiredReservations)
    {
        $this->releaseExpiredReservations = $releaseExpiredReservations;

        return $this;
    }


    public function build(): InventoryConfiguration
    {
        return new InventoryConfigurationModel(
            $this->reservationExpirationInMinutes,
            $this->releaseExpiredReservations
        );
    }

    public static function of(): InventoryConfigurationBuilder
    {
        return new self();
    }
}
