<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportReferenceBuilder;

/**
 * @implements Builder<ProductVariantImport>
 */
final class ProductVariantImportBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ImportReference|?ImportReferenceBuilder
     */
    private $product;

    /**
     * @var ?ImageCollection
     */
    private $images;

    /**
     * @var ?AssetCollection
     */
    private $assets;

    /**
     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?bool
     */
    private $isMasterVariant;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The product in which this product variant is contained.</p>.
     *
     * @return null|ImportReference
     */
    public function getProduct()
    {
        return $this->product instanceof ImportReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|bool
     */
    public function getIsMasterVariant()
    {
        return $this->isMasterVariant;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProduct(?ImportReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssets(?AssetCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIsMasterVariant(?bool $isMasterVariant)
    {
        $this->isMasterVariant = $isMasterVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductBuilder(?ImportReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    public function build(): ProductVariantImport
    {
        return new ProductVariantImportModel(
            $this->key,
            ($this->product instanceof ImportReferenceBuilder ? $this->product->build() : $this->product),
            $this->images,
            $this->assets,
            $this->attributes,
            $this->sku,
            $this->isMasterVariant
        );
    }

    public static function of(): ProductVariantImportBuilder
    {
        return new self();
    }
}
