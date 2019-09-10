<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartApplyDeltaToLineItemShippingDetailsTargetsAction extends CartUpdateAction
{
    
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_TARGETS_DELTA = 'targetsDelta';

    /**
     *
     * @return string|null
     */
    public function getLineItemId();
    
    /**
     *
     * @return ItemShippingTargetCollection|null
     */
    public function getTargetsDelta();
    public function setLineItemId(?string $lineItemId): void;
    
    public function setTargetsDelta(?ItemShippingTargetCollection $targetsDelta): void;
}