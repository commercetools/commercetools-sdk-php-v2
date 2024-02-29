<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariantAvailability extends JsonObject
{
    public const FIELD_CHANNELS = 'channels';
    public const FIELD_IS_ON_STOCK = 'isOnStock';
    public const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    public const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';

    /**
     * <p>For each <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> with a supply Channel, an entry is added to <code>channels</code>.</p>
     *

     * @return null|ProductVariantChannelAvailabilityMap
     */
    public function getChannels();

    /**
     * <p>Indicates whether a Product Variant is in stock.</p>
     *

     * @return null|bool
     */
    public function getIsOnStock();

    /**
     * <p>Number of days to restock a Product Variant once it is out of stock.</p>
     *

     * @return null|int
     */
    public function getRestockableInDays();

    /**
     * <p>Number of items of the Product Variant that are in stock.</p>
     *

     * @return null|int
     */
    public function getAvailableQuantity();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a>.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * @param ?ProductVariantChannelAvailabilityMap $channels
     */
    public function setChannels(?ProductVariantChannelAvailabilityMap $channels): void;

    /**
     * @param ?bool $isOnStock
     */
    public function setIsOnStock(?bool $isOnStock): void;

    /**
     * @param ?int $restockableInDays
     */
    public function setRestockableInDays(?int $restockableInDays): void;

    /**
     * @param ?int $availableQuantity
     */
    public function setAvailableQuantity(?int $availableQuantity): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;
}
