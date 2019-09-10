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
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductVariantModel extends JsonObjectModel implements ProductVariant
{
    /**
     * @var ?ScopedPrice
     */
    protected $scopedPrice;

    /**
     * @var ?ImageCollection
     */
    protected $images;

    /**
     * @var ?AssetCollection
     */
    protected $assets;

    /**
     * @var ?bool
     */
    protected $isMatchingVariant;

    /**
     * @var ?Price
     */
    protected $price;

    /**
     * @var ?bool
     */
    protected $scopedPriceDiscounted;

    /**
     * @var ?AttributeCollection
     */
    protected $attributes;

    /**
     * @var ?ProductVariantAvailability
     */
    protected $availability;

    /**
     * @var ?int
     */
    protected $id;

    /**
     * @var ?PriceCollection
     */
    protected $prices;

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        ScopedPrice $scopedPrice = null,
        ImageCollection $images = null,
        AssetCollection $assets = null,
        bool $isMatchingVariant = null,
        Price $price = null,
        bool $scopedPriceDiscounted = null,
        AttributeCollection $attributes = null,
        ProductVariantAvailability $availability = null,
        int $id = null,
        PriceCollection $prices = null,
        string $sku = null,
        string $key = null
    ) {
        $this->scopedPrice = $scopedPrice;
        $this->images = $images;
        $this->assets = $assets;
        $this->isMatchingVariant = $isMatchingVariant;
        $this->price = $price;
        $this->scopedPriceDiscounted = $scopedPriceDiscounted;
        $this->attributes = $attributes;
        $this->availability = $availability;
        $this->id = $id;
        $this->prices = $prices;
        $this->sku = $sku;
        $this->key = $key;
    }

    /**
     * @return null|ScopedPrice
     */
    public function getScopedPrice()
    {
        if (is_null($this->scopedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductVariant::FIELD_SCOPED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->scopedPrice = ScopedPriceModel::of($data);
        }

        return $this->scopedPrice;
    }

    /**
     * @return null|ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariant::FIELD_IMAGES);
            if (is_null($data)) {
                return null;
            }
            $this->images = ImageCollection::fromArray($data);
        }

        return $this->images;
    }

    /**
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariant::FIELD_ASSETS);
            if (is_null($data)) {
                return null;
            }
            $this->assets = AssetCollection::fromArray($data);
        }

        return $this->assets;
    }

    /**
     * @return null|bool
     */
    public function getIsMatchingVariant()
    {
        if (is_null($this->isMatchingVariant)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductVariant::FIELD_IS_MATCHING_VARIANT);
            if (is_null($data)) {
                return null;
            }
            $this->isMatchingVariant = (bool) $data;
        }

        return $this->isMatchingVariant;
    }

    /**
     * @return null|Price
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductVariant::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = PriceModel::of($data);
        }

        return $this->price;
    }

    /**
     * @return null|bool
     */
    public function getScopedPriceDiscounted()
    {
        if (is_null($this->scopedPriceDiscounted)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductVariant::FIELD_SCOPED_PRICE_DISCOUNTED);
            if (is_null($data)) {
                return null;
            }
            $this->scopedPriceDiscounted = (bool) $data;
        }

        return $this->scopedPriceDiscounted;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariant::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }

    /**
     * @return null|ProductVariantAvailability
     */
    public function getAvailability()
    {
        if (is_null($this->availability)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductVariant::FIELD_AVAILABILITY);
            if (is_null($data)) {
                return null;
            }

            $this->availability = ProductVariantAvailabilityModel::of($data);
        }

        return $this->availability;
    }

    /**
     * @return null|int
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductVariant::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (int) $data;
        }

        return $this->id;
    }

    /**
     * @return null|PriceCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariant::FIELD_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->prices = PriceCollection::fromArray($data);
        }

        return $this->prices;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductVariant::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductVariant::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setScopedPrice(?ScopedPrice $scopedPrice): void
    {
        $this->scopedPrice = $scopedPrice;
    }

    public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }

    public function setAssets(?AssetCollection $assets): void
    {
        $this->assets = $assets;
    }

    public function setIsMatchingVariant(?bool $isMatchingVariant): void
    {
        $this->isMatchingVariant = $isMatchingVariant;
    }

    public function setPrice(?Price $price): void
    {
        $this->price = $price;
    }

    public function setScopedPriceDiscounted(?bool $scopedPriceDiscounted): void
    {
        $this->scopedPriceDiscounted = $scopedPriceDiscounted;
    }

    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function setAvailability(?ProductVariantAvailability $availability): void
    {
        $this->availability = $availability;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setPrices(?PriceCollection $prices): void
    {
        $this->prices = $prices;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
