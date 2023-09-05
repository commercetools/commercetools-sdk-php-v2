<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantImportDraft>
 */
final class ProductVariantImportDraftBuilder implements Builder
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

     * @var ?PriceDraftCollection
     */
    private $prices;

    /**

     * @var ?AttributeCollection
     */
    private $attributes;

    /**

     * @var ?ImageCollection
     */
    private $images;

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>. Required if you do not set a value for <code>sku</code>.
     * If set, you must specify a <code>productId</code> in the <a href="ctp:api:type:LineItemImportDraft">LineItemImportDraft</a> also.</p>
     *

     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The <code>sku</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>. Required if you do not set a value for <code>id</code>.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>The <a href="ctp:api:type:Price">Prices</a> of the Product Variant if you want to override the <code>prices</code> property in the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a>.
     * If not set, the <code>prices</code> from the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a> are used in the resulting Order.
     * If set, each Price must have its unique price scope (same <code>value.currencyCode</code>, <code>country</code>, <code>customerGroup</code>, <code>channel</code>, <code>validFrom</code> and <code>validUntil</code>).</p>
     *

     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * <p>The <a href="ctp:api:type:Attribute">Attributes</a> of the Product Variant if you want to override the <code>attributes</code> property in the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a>.
     * If not set, the <code>attributes</code> from the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a> are copied to the resulting Order.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <p>The <a href="ctp:api:type:Image">Images</a> of the Product Variant if you want to override the <code>images</code> property in the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a>.
     * If not set, the <code>images</code> from the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a> are copied to the resulting Order.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
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
     * @param ?PriceDraftCollection $prices
     * @return $this
     */
    public function withPrices(?PriceDraftCollection $prices)
    {
        $this->prices = $prices;

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
     * @param ?ImageCollection $images
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }


    public function build(): ProductVariantImportDraft
    {
        return new ProductVariantImportDraftModel(
            $this->id,
            $this->sku,
            $this->prices,
            $this->attributes,
            $this->images
        );
    }

    public static function of(): ProductVariantImportDraftBuilder
    {
        return new self();
    }
}
