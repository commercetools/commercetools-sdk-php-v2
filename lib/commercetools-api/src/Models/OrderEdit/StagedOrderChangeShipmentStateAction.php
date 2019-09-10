<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderChangeShipmentStateAction extends StagedOrderUpdateAction
{
    
    const FIELD_SHIPMENT_STATE = 'shipmentState';

    /**
     *
     * @return string|null
     */
    public function getShipmentState();
    public function setShipmentState(?string $shipmentState): void;
}