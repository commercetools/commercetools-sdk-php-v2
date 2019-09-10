<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\DeliveryItemCollection;

interface DeliveryItemsUpdatedMessagePayload extends MessagePayload
{
    
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_ITEMS = 'items';
    const FIELD_OLD_ITEMS = 'oldItems';

    /**
     *
     * @return string|null
     */
    public function getDeliveryId();
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    public function getItems();
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    public function getOldItems();
    public function setDeliveryId(?string $deliveryId): void;
    
    public function setItems(?DeliveryItemCollection $items): void;
    
    public function setOldItems(?DeliveryItemCollection $oldItems): void;
}