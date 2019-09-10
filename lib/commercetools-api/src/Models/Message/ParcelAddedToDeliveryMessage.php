<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\Parcel;

interface ParcelAddedToDeliveryMessage extends Message
{
    const FIELD_DELIVERY = 'delivery';
    const FIELD_PARCEL = 'parcel';

    /**
     * @return null|Delivery
     */
    public function getDelivery();

    /**
     * @return null|Parcel
     */
    public function getParcel();

    public function setDelivery(?Delivery $delivery): void;

    public function setParcel(?Parcel $parcel): void;
}
