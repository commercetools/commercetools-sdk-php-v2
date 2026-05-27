<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InventoryEntrySetReservationExpirationInMinutesAction>
 */
final class InventoryEntrySetReservationExpirationInMinutesActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $reservationExpirationInMinutes;

    /**
     * <p>Value to set, must be a positive integer. If empty, any existing value will be removed.</p>
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


    public function build(): InventoryEntrySetReservationExpirationInMinutesAction
    {
        return new InventoryEntrySetReservationExpirationInMinutesActionModel(
            $this->reservationExpirationInMinutes
        );
    }

    public static function of(): InventoryEntrySetReservationExpirationInMinutesActionBuilder
    {
        return new self();
    }
}
