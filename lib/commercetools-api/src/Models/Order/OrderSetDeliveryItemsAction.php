<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetDeliveryItemsAction extends OrderUpdateAction
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_ITEMS = 'items';

    /**
     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems();

    public function setDeliveryId(?string $deliveryId): void;

    public function setItems(?DeliveryItemCollection $items): void;
}
