<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetDeliveryItemsAction extends StagedOrderUpdateAction
{
    
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_ITEMS = 'items';

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
    public function setDeliveryId(?string $deliveryId): void;
    
    public function setItems(?DeliveryItemCollection $items): void;
}