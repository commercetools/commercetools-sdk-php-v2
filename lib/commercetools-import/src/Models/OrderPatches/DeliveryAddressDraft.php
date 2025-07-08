<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\Address;

interface DeliveryAddressDraft extends JsonObject
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_ADDRESS = 'address';

    /**
     * <p>Unique identifier of the Delivery.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * <p>Address to which Parcels are delivered.</p>
     *

     * @return null|Address
     */
    public function getAddress();

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;
}
