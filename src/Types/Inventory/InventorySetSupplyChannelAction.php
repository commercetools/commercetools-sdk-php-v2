<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\Channel\ChannelReference;

interface InventorySetSupplyChannelAction extends InventoryEntryUpdateAction {
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel);

}
