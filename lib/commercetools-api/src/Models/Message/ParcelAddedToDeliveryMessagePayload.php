<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\Parcel;

interface ParcelAddedToDeliveryMessagePayload extends MessagePayload
{
    
    const FIELD_DELIVERY = 'delivery';
    const FIELD_PARCEL = 'parcel';

    /**
     *
     * @return Delivery|null
     */
    public function getDelivery();
    
    /**
     *
     * @return Parcel|null
     */
    public function getParcel();
    public function setDelivery(?Delivery $delivery): void;
    
    public function setParcel(?Parcel $parcel): void;
}