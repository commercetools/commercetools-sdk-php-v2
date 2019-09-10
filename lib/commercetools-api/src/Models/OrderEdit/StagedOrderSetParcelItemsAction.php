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

interface StagedOrderSetParcelItemsAction extends StagedOrderUpdateAction
{
    
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_ITEMS = 'items';

    /**
     *
     * @return string|null
     */
    public function getParcelId();
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    public function getItems();
    public function setParcelId(?string $parcelId): void;
    
    public function setItems(?DeliveryItemCollection $items): void;
}