<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;

interface InventoryEntrySetSupplyChannelAction extends InventoryEntryUpdateAction
{
    
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    public function getSupplyChannel();
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;
}