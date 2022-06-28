<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\Parcel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ParcelAddedToDeliveryMessagePayload extends OrderMessagePayload
{
    public const FIELD_DELIVERY = 'delivery';
    public const FIELD_PARCEL = 'parcel';

    /**
     * @return null|Delivery
     */
    public function getDelivery();

    /**
     * @return null|Parcel
     */
    public function getParcel();

    /**
     * @param ?Delivery $delivery
     */
    public function setDelivery(?Delivery $delivery): void;

    /**
     * @param ?Parcel $parcel
     */
    public function setParcel(?Parcel $parcel): void;
}
