<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Channel\ChannelReference;

interface InventoryEntryDeletedMessage extends Message
{
    const FIELD_SKU = 'sku';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel);

}
