<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Order\DeliveryItemCollection;

interface DeliveryItemsUpdatedMessage extends Message
{

    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_ITEMS = 'items';
    public const FIELD_OLD_ITEMS = 'oldItems';

    /**
     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * @return null|DeliveryItemCollection
     */
    public function getOldItems();

    public function setDeliveryId(?string $deliveryId): void;

    public function setItems(?DeliveryItemCollection $items): void;

    public function setOldItems(?DeliveryItemCollection $oldItems): void;
}
