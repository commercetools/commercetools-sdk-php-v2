<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Order\Parcel;

interface ParcelRemovedFromDeliveryMessage extends Message
{
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_PARCEL = 'parcel';

    /**
     * @return string
     */
    public function getDeliveryId();

    /**
     * @return Parcel
     */
    public function getParcel();

    /**
     * @param string $deliveryId
     * @return $this
     */
    public function setDeliveryId(string $deliveryId);

    /**
     * @param Parcel $parcel
     * @return $this
     */
    public function setParcel(Parcel $parcel);

}
