<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetDeliveryAddressAction extends OrderUpdateAction
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_ADDRESS = 'address';

    /**
     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @return null|Address
     */
    public function getAddress();

    public function setDeliveryId(?string $deliveryId): void;

    public function setAddress(?Address $address): void;
}
