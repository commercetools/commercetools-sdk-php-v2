<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Api\Models\Common\PriceModel;
use Commercetools\Api\Models\Common\ScopedPrice;
use Commercetools\Api\Models\Common\ScopedPriceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductVariantModel extends JsonObjectModel implements ProductVariant
{
    /**
     *
     * @var ?int
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?PriceCollection
     */
    protected $prices;

    /**
     *
     * @var ?AttributeCollection
     */
    protected $attributes;

    /**
     *
     * @var ?Price
     */
    protected $price;

    /**
     *
     * @var ?ImageCollection
     */
    protected $images;

    /**
     *
     * @var ?AssetCollection
     */
    protected $assets;

    /**
     *
     * @var ?ProductVariantAvailability
     */
    protected $availability;

    /**
     *
     * @var ?bool
     */
    protected $isMatchingVariant;

    /**
     *
     * @var ?ScopedPrice
     */
    protected $scopedPrice;

    /**
     *
     * @var ?bool
     */
    protected $scopedPriceDiscounted;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $id = null,
        ?string $sku = null,
        ?string $key = null,
        ?PriceCollection $prices = null,
        ?AttributeCollection $attributes = null,
        ?Price $price = null,
        ?ImageCollection $images = null,
        ?AssetCollection $assets = null,
        ?ProductVariantAvailability $availability = null,
        ?bool $isMatchingVariant = null,
        ?ScopedPrice $scopedPrice = null,
        ?bool $scopedPriceDiscounted = null
    ) {
        $this->id = $id;
        $this->sku = $sku;
        $this->key = $key;
        $this->prices = $prices;
        $this->attributes = $attributes;
        $this->price = $price;
        $this->images = $images;
        $this->assets = $assets;
        $this->availability = $availability;
        $this->isMatchingVariant = $isMatchingVariant;
        $this->scopedPrice = $scopedPrice;
        $this->scopedPriceDiscounted = $scopedPriceDiscounted;
    }

    /**
     * <p>A unique, sequential identifier of the Product Variant within the Product.</p>
     *
     *
     * @return null|int
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (int) $data;
        }

        return $this->id;
    }

    /**
     * <p>User-defined unique SKU of the Product Variant.</p>
     *
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>User-defined unique identifier of the ProductVariant.</p>
     * <p>This is different from <a href="ctp:api:type:Product">Product</a> <code>key</code>.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>The Embedded Prices of the Product Variant.
     * Cannot contain two Prices of the same Price scope (with same currency, country, Customer Group, Channel, <code>validFrom</code> and <code>validUntil</code>).</p>
     *
     *
     * @return null|PriceCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->prices = PriceCollection::fromArray($data);
        }

        return $this->prices;
    }

    /**
     * <p>Attributes of the Product Variant.</p>
     *
     *
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }

    /**
     * <p>Only available when <a href="/../api/pricing-and-discounts-overview#price-selection">price selection</a> is used.
     * Cannot be used in a <a href="ctp:api:type:QueryPredicate">Query Predicate</a>.</p>
     *
     *
     * @return null|Price
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = PriceModel::of($data);
        }

        return $this->price;
    }

    /**
     * <p>Images of the Product Variant.</p>
     *
     *
     * @return null|ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_IMAGES);
            if (is_null($data)) {
                return null;
            }
            $this->images = ImageCollection::fromArray($data);
        }

        return $this->images;
    }

    /**
     * <p>Media assets of the Product Variant.</p>
     *
     *
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSETS);
            if (is_null($data)) {
                return null;
            }
            $this->assets = AssetCollection::fromArray($data);
        }

        return $this->assets;
    }

    /**
     * <p>Set if the Product Variant is tracked by <a href="ctp:api:type:InventoryEntry">Inventory</a>.
     * Can be used as an optimization to reduce calls to the Inventory service.
     * May not contain the latest Inventory State (it is <a href="/general-concepts#eventual-consistency">eventually consistent</a>).</p>
     *
     *
     * @return null|ProductVariantAvailability
     */
    public function getAvailability()
    {
        if (is_null($this->availability)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AVAILABILITY);
            if (is_null($data)) {
                return null;
            }

            $this->availability = ProductVariantAvailabilityModel::of($data);
        }

        return $this->availability;
    }

    /**
     * <p><code>true</code> if the Product Variant matches the search query.
     * Only available in response to a <a href="ctp:api:type:ProductProjectionSearch">Product Projection Search</a> request.</p>
     *
     *
     * @return null|bool
     */
    public function getIsMatchingVariant()
    {
        if (is_null($this->isMatchingVariant)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_MATCHING_VARIANT);
            if (is_null($data)) {
                return null;
            }
            $this->isMatchingVariant = (bool) $data;
        }

        return $this->isMatchingVariant;
    }

    /**
     * <p>Only available in response to a <a href="ctp:api:type:ProductProjectionSearch">Product Projection Search</a> request
     * with <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>.
     * Can be used to sort, <a href="ctp:api:type:ProductProjectionSearchFilterScopedPrice">filter</a>, and facet.</p>
     *
     *
     * @return null|ScopedPrice
     */
    public function getScopedPrice()
    {
        if (is_null($this->scopedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SCOPED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->scopedPrice = ScopedPriceModel::of($data);
        }

        return $this->scopedPrice;
    }

    /**
     * <p>Only available in response to a <a href="ctp:api:type:ProductProjectionSearchFilterScopedPrice">Product Projection Search</a> request
     * with <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>.</p>
     *
     *
     * @return null|bool
     */
    public function getScopedPriceDiscounted()
    {
        if (is_null($this->scopedPriceDiscounted)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_SCOPED_PRICE_DISCOUNTED);
            if (is_null($data)) {
                return null;
            }
            $this->scopedPriceDiscounted = (bool) $data;
        }

        return $this->scopedPriceDiscounted;
    }


    /**
     * @param ?int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?PriceCollection $prices
     */
    public function setPrices(?PriceCollection $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @param ?Price $price
     */
    public function setPrice(?Price $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void
    {
        $this->assets = $assets;
    }

    /**
     * @param ?ProductVariantAvailability $availability
     */
    public function setAvailability(?ProductVariantAvailability $availability): void
    {
        $this->availability = $availability;
    }

    /**
     * @param ?bool $isMatchingVariant
     */
    public function setIsMatchingVariant(?bool $isMatchingVariant): void
    {
        $this->isMatchingVariant = $isMatchingVariant;
    }

    /**
     * @param ?ScopedPrice $scopedPrice
     */
    public function setScopedPrice(?ScopedPrice $scopedPrice): void
    {
        $this->scopedPrice = $scopedPrice;
    }

    /**
     * @param ?bool $scopedPriceDiscounted
     */
    public function setScopedPriceDiscounted(?bool $scopedPriceDiscounted): void
    {
        $this->scopedPriceDiscounted = $scopedPriceDiscounted;
    }
}
