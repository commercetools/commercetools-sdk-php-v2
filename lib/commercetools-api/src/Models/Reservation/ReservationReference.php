<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Reservation;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReservationReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**

     * @return null|string
     */
    public function getTypeId();

    /**
     * <p>Contains the representation of the expanded Reservation.
     * Only present in responses to requests with <a href="/api/general-concepts#reference-expansion">Reference Expansion</a> for Reservations.</p>
     *

     * @return null|Reservation
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Reservation">Reservation</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?Reservation $obj
     */
    public function setObj(?Reservation $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
