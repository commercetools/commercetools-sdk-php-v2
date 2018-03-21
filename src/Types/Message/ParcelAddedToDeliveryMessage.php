<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Order\Parcel;
use Commercetools\Types\Order\Delivery;

interface ParcelAddedToDeliveryMessage extends Message {
    const FIELD_DELIVERY = 'delivery';
    const FIELD_PARCEL = 'parcel';

    /**
     * @return Delivery
     */
    public function getDelivery();

    /**
     * @return Parcel
     */
    public function getParcel();

    /**
     * @param Delivery $delivery
     * @return $this
     */
    public function setDelivery(Delivery $delivery);

    /**
     * @param Parcel $parcel
     * @return $this
     */
    public function setParcel(Parcel $parcel);

}
