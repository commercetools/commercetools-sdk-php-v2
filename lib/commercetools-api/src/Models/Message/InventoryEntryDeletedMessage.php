<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReference;

interface InventoryEntryDeletedMessage extends Message
{
    const FIELD_SKU = 'sku';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|ChannelReference
     */
    public function getSupplyChannel();

    public function setSku(?string $sku): void;

    public function setSupplyChannel(?ChannelReference $supplyChannel): void;
}
