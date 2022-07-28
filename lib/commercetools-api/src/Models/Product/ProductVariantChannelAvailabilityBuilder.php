<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantChannelAvailability>
 */
final class ProductVariantChannelAvailabilityBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $isOnStock;

    /**

     * @var ?int
     */
    private $restockableInDays;

    /**

     * @var ?int
     */
    private $availableQuantity;

    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**
     * <p>Indicates whether a Product Variant is in stock in a specified <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|bool
     */
    public function getIsOnStock()
    {
        return $this->isOnStock;
    }

    /**
     * <p>Number of days to restock a Product Variant once it is out of stock in a specified <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|int
     */
    public function getRestockableInDays()
    {
        return $this->restockableInDays;
    }

    /**
     * <p>Number of items of this Product Variant that are in stock in a specified <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|int
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a>.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param ?bool $isOnStock
     * @return $this
     */
    public function withIsOnStock(?bool $isOnStock)
    {
        $this->isOnStock = $isOnStock;

        return $this;
    }

    /**
     * @param ?int $restockableInDays
     * @return $this
     */
    public function withRestockableInDays(?int $restockableInDays)
    {
        $this->restockableInDays = $restockableInDays;

        return $this;
    }

    /**
     * @param ?int $availableQuantity
     * @return $this
     */
    public function withAvailableQuantity(?int $availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;

        return $this;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }


    public function build(): ProductVariantChannelAvailability
    {
        return new ProductVariantChannelAvailabilityModel(
            $this->isOnStock,
            $this->restockableInDays,
            $this->availableQuantity,
            $this->id,
            $this->version
        );
    }

    public static function of(): ProductVariantChannelAvailabilityBuilder
    {
        return new self();
    }
}
