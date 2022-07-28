<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariantChannelAvailability extends JsonObject
{
    public const FIELD_IS_ON_STOCK = 'isOnStock';
    public const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    public const FIELD_AVAILABLE_QUANTITY = 'availableQuantity';
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';

    /**
     * <p>Indicates whether a Product Variant is in stock in a specified <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|bool
     */
    public function getIsOnStock();

    /**
     * <p>Number of days to restock a Product Variant once it is out of stock in a specified <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|int
     */
    public function getRestockableInDays();

    /**
     * <p>Number of items of this Product Variant that are in stock in a specified <a href="ctp:api:type:Channel">Channel</a>.</p>
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
