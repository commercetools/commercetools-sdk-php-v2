<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderRemoveParcelFromDeliveryAction extends StagedOrderUpdateAction
{
    
    const FIELD_PARCEL_ID = 'parcelId';

    /**
     *
     * @return string|null
     */
    public function getParcelId();
    public function setParcelId(?string $parcelId): void;
}