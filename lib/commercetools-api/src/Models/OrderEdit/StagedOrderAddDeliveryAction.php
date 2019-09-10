<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\ParcelDraftCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderAddDeliveryAction extends StagedOrderUpdateAction
{
    
    const FIELD_ITEMS = 'items';
    const FIELD_ADDRESS = 'address';
    const FIELD_PARCELS = 'parcels';

    /**
     *
     * @return DeliveryItemCollection|null
     */
    public function getItems();
    
    /**
     *
     * @return Address|null
     */
    public function getAddress();
    
    /**
     *
     * @return ParcelDraftCollection|null
     */
    public function getParcels();
    public function setItems(?DeliveryItemCollection $items): void;
    
    public function setAddress(?Address $address): void;
    
    public function setParcels(?ParcelDraftCollection $parcels): void;
}