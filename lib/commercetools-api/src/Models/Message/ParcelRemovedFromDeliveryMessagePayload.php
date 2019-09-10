<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\Parcel;

interface ParcelRemovedFromDeliveryMessagePayload extends MessagePayload
{
    
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_PARCEL = 'parcel';

    /**
     *
     * @return string|null
     */
    public function getDeliveryId();
    
    /**
     *
     * @return Parcel|null
     */
    public function getParcel();
    public function setDeliveryId(?string $deliveryId): void;
    
    public function setParcel(?Parcel $parcel): void;
}