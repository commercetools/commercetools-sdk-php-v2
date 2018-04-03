<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Inventory\InventoryEntryUpdateActionModel;

use Commercetools\Types\Channel\ChannelReference;

class InventorySetSupplyChannelActionModel extends InventoryEntryUpdateActionModel implements InventorySetSupplyChannelAction {
    const DISCRIMINATOR_VALUE = 'setSupplyChannel';

    /**
     * @var ChannelReference
     */
    protected $supplyChannel;

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            $value = $this->raw(InventorySetSupplyChannelAction::FIELD_SUPPLY_CHANNEL);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->supplyChannel = $value;
        }
        return $this->supplyChannel;
    }

    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

}
