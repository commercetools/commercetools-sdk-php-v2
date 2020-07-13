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

interface ParcelRemovedFromDeliveryMessagePayload extends MessagePayload
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_PARCEL = 'parcel';

    /**
     * @return null|string
     */
    public function getDeliveryId();

    /**
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
