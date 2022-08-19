<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Parcel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ParcelRemovedFromDeliveryMessagePayload extends OrderMessagePayload
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_PARCEL = 'parcel';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * <p><a href="ctp:api:type:Parcel">Parcel</a> that was removed from the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|Parcel
     */
    public function getParcel();

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?Parcel $parcel
     */
    public function setParcel(?Parcel $parcel): void;
}
