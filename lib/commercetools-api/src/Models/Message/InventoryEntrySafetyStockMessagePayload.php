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

interface InventoryEntrySafetyStockMessagePayload extends MessagePayload
{
    public const FIELD_SKU = 'sku';
    public const FIELD_QUANTITY_ON_STOCK = 'quantityOnStock';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';

    /**
     * <p>The <code>sku</code> of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> whose <code>quantityOnStock</code> reached the configured safety stock level.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>The <code>quantityOnStock</code> of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> at the time the safety stock level was reached.</p>
     *

     * @return null|int
     */
    public function getQuantityOnStock();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Channel">Channel</a> where the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> <code>quantityOnStock</code> reached the configured safety stock level.</p>
     *

     * @return null|ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?int $quantityOnStock
     */
    public function setQuantityOnStock(?int $quantityOnStock): void;

    /**
     * @param ?ChannelReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelReference $supplyChannel): void;
}
