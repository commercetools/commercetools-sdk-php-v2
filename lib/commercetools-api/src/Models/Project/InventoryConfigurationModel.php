<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InventoryConfigurationModel extends JsonObjectModel implements InventoryConfiguration
{
    /**
     *
     * @var ?int
     */
    protected $reservationExpirationInMinutes;

    /**
     *
     * @var ?bool
     */
    protected $releaseExpiredReservations;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $reservationExpirationInMinutes = null,
        ?bool $releaseExpiredReservations = null
    ) {
        $this->reservationExpirationInMinutes = $reservationExpirationInMinutes;
        $this->releaseExpiredReservations = $releaseExpiredReservations;
    }

    /**
     * <p>The number of minutes after which a <a href="ctp:api:type:Reservation">Reservation</a> expires. To use the <a href="ctp:api:type:InventoryMode">ReserveOnCart</a> inventory mode, this field must be set.</p>
     *
     *
     * @return null|int
     */
    public function getReservationExpirationInMinutes()
    {
        if (is_null($this->reservationExpirationInMinutes)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RESERVATION_EXPIRATION_IN_MINUTES);
            if (is_null($data)) {
                return null;
            }
            $this->reservationExpirationInMinutes = (int) $data;
        }

        return $this->reservationExpirationInMinutes;
    }

    /**
     * <p>If set to <code>true</code>, <a href="ctp:api:type:Reservation">Reservations</a> are marked as <code>Expired</code> once their
     * <code>reservationExpirationInMinutes</code> is reached. The reserved inventory is then made available. If set to <code>false</code>, tracking Line Items with expired reservations becomes your responsibility.</p>
     *
     *
     * @return null|bool
     */
    public function getReleaseExpiredReservations()
    {
        if (is_null($this->releaseExpiredReservations)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_RELEASE_EXPIRED_RESERVATIONS);
            if (is_null($data)) {
                return null;
            }
            $this->releaseExpiredReservations = (bool) $data;
        }

        return $this->releaseExpiredReservations;
    }


    /**
     * @param ?int $reservationExpirationInMinutes
     */
    public function setReservationExpirationInMinutes(?int $reservationExpirationInMinutes): void
    {
        $this->reservationExpirationInMinutes = $reservationExpirationInMinutes;
    }

    /**
     * @param ?bool $releaseExpiredReservations
     */
    public function setReleaseExpiredReservations(?bool $releaseExpiredReservations): void
    {
        $this->releaseExpiredReservations = $releaseExpiredReservations;
    }
}
