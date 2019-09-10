<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetReturnShipmentStateAction extends StagedOrderUpdateAction
{
    
    const FIELD_RETURN_ITEM_ID = 'returnItemId';
    const FIELD_SHIPMENT_STATE = 'shipmentState';

    /**
     *
     * @return string|null
     */
    public function getReturnItemId();
    
    /**
     *
     * @return string|null
     */
    public function getShipmentState();
    public function setReturnItemId(?string $returnItemId): void;
    
    public function setShipmentState(?string $shipmentState): void;
}