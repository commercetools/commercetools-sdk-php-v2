<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetReturnShipmentStateAction extends StagedOrderUpdateAction
{
    public const FIELD_RETURN_ITEM_ID = 'returnItemId';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';

    /**

     * @return null|string
     */
    public function getReturnItemId();

    /**

     * @return null|string
     */
    public function getShipmentState();

    /**
     * @param ?string $returnItemId
     */
    public function setReturnItemId(?string $returnItemId): void;

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void;
}
