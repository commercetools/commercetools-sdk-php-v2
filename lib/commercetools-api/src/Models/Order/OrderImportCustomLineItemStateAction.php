<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;

interface OrderImportCustomLineItemStateAction extends OrderUpdateAction
{
    
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_STATE = 'state';

    /**
     *
     * @return string|null
     */
    public function getCustomLineItemId();
    
    /**
     *
     * @return ItemStateCollection|null
     */
    public function getState();
    public function setCustomLineItemId(?string $customLineItemId): void;
    
    public function setState(?ItemStateCollection $state): void;
}