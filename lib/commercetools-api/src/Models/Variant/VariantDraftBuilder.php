<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Api\Models\Product\ProductResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantDraft>
 */
final class VariantDraftBuilder implements Builder
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

     * @var null|ProductResourceIdentifier|ProductResourceIdentifierBuilder
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

     * @var ?AssetDraftCollection
     */
    private $assets;

    /**
     * <p>User-defined unique identifier for the Variant.
     * This field is optional, but we strongly recommend setting it.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>User-defined unique SKU of the Variant.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>ResourceIdentifier of the <a href="ctp:api:type:Product">Product</a> the Variant belongs to.</p>
     *

     * @return null|ProductResourceIdentifier
     */
    public function getProduct()
    {
        return $this->product instanceof ProductResourceIdentifierBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Indicates whether the Variant is published.
     * If <code>true</code>, the Variant will be immediately available in the current published state.</p>
     *

     * @return null|bool
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * <p>Images for the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>Variant Attributes according to the respective <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <p>Media assets for the Variant.</p>
     *

     * @return null|AssetDraftCollection
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
     * @param ?ProductResourceIdentifier $product
     * @return $this
     */
    public function withProduct(?ProductResourceIdentifier $product)
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
     * @param ?AssetDraftCollection $assets
     * @return $this
     */
    public function withAssets(?AssetDraftCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductResourceIdentifierBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    public function build(): VariantDraft
    {
        return new VariantDraftModel(
            $this->key,
            $this->sku,
            $this->product instanceof ProductResourceIdentifierBuilder ? $this->product->build() : $this->product,
            $this->publish,
            $this->images,
            $this->attributes,
            $this->assets
        );
    }

    public static function of(): VariantDraftBuilder
    {
        return new self();
    }
}
