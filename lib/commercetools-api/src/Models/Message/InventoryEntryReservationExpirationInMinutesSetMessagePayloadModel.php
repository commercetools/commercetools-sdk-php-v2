<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InventoryEntryReservationExpirationInMinutesSetMessagePayloadModel extends JsonObjectModel implements InventoryEntryReservationExpirationInMinutesSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'InventoryEntryReservationExpirationInMinutesSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?int
     */
    protected $newReservationExpirationInMinutes;

    /**
     *
     * @var ?int
     */
    protected $oldReservationExpirationInMinutes;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $newReservationExpirationInMinutes = null,
        ?int $oldReservationExpirationInMinutes = null,
        ?string $type = null
    ) {
        $this->newReservationExpirationInMinutes = $newReservationExpirationInMinutes;
        $this->oldReservationExpirationInMinutes = $oldReservationExpirationInMinutes;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><code>reservationExpirationInMinutes</code> value of the <a href="ctp:api:type:InventoryEntry">Inventory Entry</a> after the <a href="ctp:api:type:InventoryEntrySetReservationExpirationInMinutesAction">Set Reservation Expiration In Minutes</a> update action.</p>
     *
     *
     * @return null|int
     */
    public function getNewReservationExpirationInMinutes()
    {
        if (is_null($this->newReservationExpirationInMinutes)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_NEW_RESERVATION_EXPIRATION_IN_MINUTES);
            if (is_null($data)) {
                return null;
            }
            $this->newReservationExpirationInMinutes = (int) $data;
        }

        return $this->newReservationExpirationInMinutes;
    }

    /**
     * <p><code>reservationExpirationInMinutes</code> value of the <a href="ctp:api:type:InventoryEntry">Inventory Entry</a> before the <a href="ctp:api:type:InventoryEntrySetReservationExpirationInMinutesAction">Set Reservation Expiration In Minutes</a> update action.</p>
     *
     *
     * @return null|int
     */
    public function getOldReservationExpirationInMinutes()
    {
        if (is_null($this->oldReservationExpirationInMinutes)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_OLD_RESERVATION_EXPIRATION_IN_MINUTES);
            if (is_null($data)) {
                return null;
            }
            $this->oldReservationExpirationInMinutes = (int) $data;
        }

        return $this->oldReservationExpirationInMinutes;
    }


    /**
     * @param ?int $newReservationExpirationInMinutes
     */
    public function setNewReservationExpirationInMinutes(?int $newReservationExpirationInMinutes): void
    {
        $this->newReservationExpirationInMinutes = $newReservationExpirationInMinutes;
    }

    /**
     * @param ?int $oldReservationExpirationInMinutes
     */
    public function setOldReservationExpirationInMinutes(?int $oldReservationExpirationInMinutes): void
    {
        $this->oldReservationExpirationInMinutes = $oldReservationExpirationInMinutes;
    }
}
