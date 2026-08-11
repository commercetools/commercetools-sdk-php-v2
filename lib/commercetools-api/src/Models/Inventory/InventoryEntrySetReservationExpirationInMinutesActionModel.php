<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InventoryEntrySetReservationExpirationInMinutesActionModel extends JsonObjectModel implements InventoryEntrySetReservationExpirationInMinutesAction
{
    public const DISCRIMINATOR_VALUE = 'setReservationExpirationInMinutes';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?int
     */
    protected $reservationExpirationInMinutes;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $reservationExpirationInMinutes = null,
        ?string $action = null
    ) {
        $this->reservationExpirationInMinutes = $reservationExpirationInMinutes;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set, must be a positive integer. If omitted, any existing value is removed.</p>
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
     * @param ?int $reservationExpirationInMinutes
     */
    public function setReservationExpirationInMinutes(?int $reservationExpirationInMinutes): void
    {
        $this->reservationExpirationInMinutes = $reservationExpirationInMinutes;
    }
}
