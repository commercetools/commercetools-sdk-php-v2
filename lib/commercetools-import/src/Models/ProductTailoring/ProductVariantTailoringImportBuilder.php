<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductTailoring;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Productvariants\AttributeCollection;
use stdClass;

/**
 * @implements Builder<ProductVariantTailoringImport>
 */
final class ProductVariantTailoringImportBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $sku;

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
     * <p>The <code>sku</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to be tailored.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Maps to <code>ProductVariantTailoring.images</code>.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>Maps to <code>ProductVariantTailoring.assets</code>.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * <p>Maps to <code>ProductVariantTailoring.attributes</code>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
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
     * @param ?ImageCollection $images
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

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
     * @param ?AttributeCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }


    public function build(): ProductVariantTailoringImport
    {
        return new ProductVariantTailoringImportModel(
            $this->sku,
            $this->images,
            $this->assets,
            $this->attributes
        );
    }

    public static function of(): ProductVariantTailoringImportBuilder
    {
        return new self();
    }
}
