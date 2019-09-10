<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction extends CartUpdateAction
{
    
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_TARGETS_DELTA = 'targetsDelta';

    /**
     *
     * @return string|null
     */
    public function getCustomLineItemId();
    
    /**
     *
     * @return ItemShippingTargetCollection|null
     */
    public function getTargetsDelta();
    public function setCustomLineItemId(?string $customLineItemId): void;
    
    public function setTargetsDelta(?ItemShippingTargetCollection $targetsDelta): void;
}