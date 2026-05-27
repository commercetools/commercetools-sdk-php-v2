<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetReservationExpirationInMinutesAction>
 */
final class CartSetReservationExpirationInMinutesActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $reservationExpirationInMinutes;

    /**
     * <p>Value to set. Must be a positive integer.</p>
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


    public function build(): CartSetReservationExpirationInMinutesAction
    {
        return new CartSetReservationExpirationInMinutesActionModel(
            $this->reservationExpirationInMinutes
        );
    }

    public static function of(): CartSetReservationExpirationInMinutesActionBuilder
    {
        return new self();
    }
}
