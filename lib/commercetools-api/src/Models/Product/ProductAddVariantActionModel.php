<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductAddVariantActionModel extends JsonObjectModel implements ProductAddVariantAction
{
    const DISCRIMINATOR_VALUE = 'addVariant';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ImageCollection
     */
    protected $images;

    /**
     * @var ?AssetCollection
     */
    protected $assets;

    /**
     * @var ?AttributeCollection
     */
    protected $attributes;

    /**
     * @var ?bool
     */
    protected $staged;

    /**
     * @var ?PriceDraftCollection
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
        string $action = null,
        ImageCollection $images = null,
        AssetCollection $assets = null,
        AttributeCollection $attributes = null,
        bool $staged = null,
        PriceDraftCollection $prices = null,
        string $sku = null,
        string $key = null
    ) {
        $this->action = $action;
        $this->images = $images;
        $this->assets = $assets;
        $this->attributes = $attributes;
        $this->staged = $staged;
        $this->prices = $prices;
        $this->sku = $sku;
        $this->key = $key;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductAddVariantAction::FIELD_IMAGES);
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
            $data = $this->raw(ProductAddVariantAction::FIELD_ASSETS);
            if (is_null($data)) {
                return null;
            }
            $this->assets = AssetCollection::fromArray($data);
        }

        return $this->assets;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductAddVariantAction::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductAddVariantAction::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductAddVariantAction::FIELD_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->prices = PriceDraftCollection::fromArray($data);
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
            $data = $this->raw(ProductAddVariantAction::FIELD_SKU);
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
            $data = $this->raw(ProductAddVariantAction::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }

    public function setAssets(?AssetCollection $assets): void
    {
        $this->assets = $assets;
    }

    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    public function setPrices(?PriceDraftCollection $prices): void
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
