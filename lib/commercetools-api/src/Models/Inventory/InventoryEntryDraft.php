<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface InventoryEntryDraft extends JsonObject
{
    public const FIELD_SKU = 'sku';
    public const FIELD_KEY = 'key';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_QUANTITY_ON_STOCK = 'quantityOnStock';
    public const FIELD_MIN_CART_QUANTITY = 'minCartQuantity';
    public const FIELD_MAX_CART_QUANTITY = 'maxCartQuantity';
    public const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    public const FIELD_EXPECTED_DELIVERY = 'expectedDelivery';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p><a href="ctp:api:type:ProductVariant">ProductVariant</a> <code>sku</code> of the InventoryEntry.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>User-defined unique identifier for the InventoryEntry.</p>
     * <p>This field is optional for backwards compatibility reasons, but we strongly recommend setting it. Keys are mandatory for importing InventoryEntries with the <a href="/../api/import-export/overview">Import API</a> and the <a href="/../merchant-center/import-data">Merchant Center</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p><a href="ctp:api:type:Channel">Channel</a> that supplies this InventoryEntry.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel();

    /**
     * <p>Overall amount of stock.</p>
     *

     * @return null|int
     */
    public function getQuantityOnStock();

    /**
     * <p>Minimum quantity that can be added to a Cart. See <a href="/../api/carts-orders-overview#quantity-limits">Quantity limits</a>.</p>
     *

     * @return null|int
     */
    public function getMinCartQuantity();

    /**
     * <p>Maximum quantity that can be added to a Cart. See <a href="/../api/carts-orders-overview#quantity-limits">Quantity limits</a>.</p>
     *

     * @return null|int
     */
    public function getMaxCartQuantity();

    /**
     * <p>How often the InventoryEntry is restocked (in days).</p>
     *

     * @return null|int
     */
    public function getRestockableInDays();

    /**
     * <p>Date and time of the next restock.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery();

    /**
     * <p>Custom Fields of the InventoryEntry.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     */
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;

    /**
     * @param ?int $quantityOnStock
     */
    public function setQuantityOnStock(?int $quantityOnStock): void;

    /**
     * @param ?int $minCartQuantity
     */
    public function setMinCartQuantity(?int $minCartQuantity): void;

    /**
     * @param ?int $maxCartQuantity
     */
    public function setMaxCartQuantity(?int $maxCartQuantity): void;

    /**
     * @param ?int $restockableInDays
     */
    public function setRestockableInDays(?int $restockableInDays): void;

    /**
     * @param ?DateTimeImmutable $expectedDelivery
     */
    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
