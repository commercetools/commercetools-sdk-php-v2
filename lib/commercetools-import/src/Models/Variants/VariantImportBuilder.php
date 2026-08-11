<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Variants;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceBuilder;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceBuilder;
use Commercetools\Import\Models\Productvariants\AttributeCollection;
use stdClass;

/**
 * @implements Builder<VariantImport>
 */
final class VariantImportBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var null|ProductKeyReference|ProductKeyReferenceBuilder
     */
    private $product;

    /**

     * @var ?bool
     */
    private $publish;

    /**

     * @var ?ImageCollection
     */
    private $images;

    /**

     * @var ?AttributeCollection
     */
    private $attributes;

    /**

     * @var ?AssetCollection
     */
    private $assets;

    /**
     * <p>User-defined unique identifier. If a Variant with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>VariantData.sku</code>.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Maps to <code>Variant.product</code>.</p>
     *

     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Indicates whether the Variant is published. If <code>true</code>, the Variant is immediately available in the current published state.
     * Maps to <code>VariantDraft.publish</code>.</p>
     *

     * @return null|bool
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * <p>Maps to <code>VariantData.images</code>.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>Maps to <code>VariantData.attributes</code>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <p>Maps to <code>VariantData.assets</code>.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param ?ProductKeyReference $product
     * @return $this
     */
    public function withProduct(?ProductKeyReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @param ?bool $publish
     * @return $this
     */
    public function withPublish(?bool $publish)
    {
        $this->publish = $publish;

        return $this;
    }

    /**
     * @param ?ImageCollection $images
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param ?AttributeCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @param ?AssetCollection $assets
     * @return $this
     */
    public function withAssets(?AssetCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductKeyReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    public function build(): VariantImport
    {
        return new VariantImportModel(
            $this->key,
            $this->sku,
            $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product,
            $this->publish,
            $this->images,
            $this->attributes,
            $this->assets
        );
    }

    public static function of(): VariantImportBuilder
    {
        return new self();
    }
}
