<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntryDeletedMessage extends Message
{
    public const FIELD_SKU = 'sku';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * <p>The <code>sku</code> of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> that was deleted.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Channel">Channel</a> where the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> was deleted.</p>
     *

     * @return null|ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?ChannelReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelReference $supplyChannel): void;
}
