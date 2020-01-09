<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;

interface InventoryEntrySetSupplyChannelAction extends InventoryEntryUpdateAction
{
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * <p>If absent, the supply channel is removed.
     * This action will fail if an entry with the combination of sku and supplyChannel already exists.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;
}
