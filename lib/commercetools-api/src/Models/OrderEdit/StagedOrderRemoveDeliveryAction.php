<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderRemoveDeliveryAction extends StagedOrderUpdateAction
{
    
    const FIELD_DELIVERY_ID = 'deliveryId';

    /**
     *
     * @return string|null
     */
    public function getDeliveryId();
    public function setDeliveryId(?string $deliveryId): void;
}