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
     * <p>The sequential ID of the variant within the product.
     * The variant with provided ID should exist in some existing product, so you also need to specify the productId if this property is set,
     * or alternatively you can just specify SKU of the product variant.</p>.
     *
     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The SKU of the existing variant.</p>.
     *
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>The prices of the variant.
     * The prices should not contain two prices for the same price scope (same currency, country and customer group).
     * If this property is defined, then it will override the <code>prices</code> property from the original product variant, otherwise <code>prices</code> property from the original product variant would be copied in the resulting order.</p>.
     *
     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * <p>If this property is defined, then it will override the <code>attributes</code> property from the original
     * product variant, otherwise <code>attributes</code> property from the original product variant would be copied in the resulting order.</p>.
     *
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <p>If this property is defined, then it will override the <code>images</code> property from the original
     * product variant, otherwise <code>images</code> property from the original product variant would be copied in the resulting order.</p>.
     *
     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return $this
     */
    public function withId(?int $id)
    {
        $this->id = $id;

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
    public function withPrices(?PriceDraftCollection $prices)
    {
        $this->prices = $prices;

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
