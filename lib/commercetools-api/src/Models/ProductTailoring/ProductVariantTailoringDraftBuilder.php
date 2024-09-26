<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantTailoringDraft>
 */
final class ProductVariantTailoringDraftBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $id;

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

     * @var ?ProductTailoringAttributeCollection
     */
    private $attributes;

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to be tailored.</p>
     *

     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

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
     * <p>Images of the tailored Product Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>Media assets of the tailored Product Variant.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * <p>Attributes of the tailored Product Variant according to the respective <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.
     * If provided, these Attributes are selectively merged into the <code>attributes</code> of the corresponding <a href="ctp:api:type:ProductVariant">ProductVariant</a>:</p>
     * <ul>
     * <li>If the ProductVariant contains an Attribute with the same <code>name</code>, its <code>value</code> is overwritten,</li>
     * <li>otherwise the Attribute and its value are added to the ProductVariant.</li>
     * </ul>
     *

     * @return null|ProductTailoringAttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param ?int $id
     * @return $this
     */
    public function withId(?int $id)
    {
        $this->id = $id;

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
     * @param ?ProductTailoringAttributeCollection $attributes
     * @return $this
     */
    public function withAttributes(?ProductTailoringAttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }


    public function build(): ProductVariantTailoringDraft
    {
        return new ProductVariantTailoringDraftModel(
            $this->id,
            $this->sku,
            $this->images,
            $this->assets,
            $this->attributes
        );
    }

    public static function of(): ProductVariantTailoringDraftBuilder
    {
        return new self();
    }
}
