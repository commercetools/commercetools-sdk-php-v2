<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceBuilder;
use Commercetools\Import\Models\Productvariants\AttributeCollection;
use stdClass;

/**
 * @implements Builder<LineItemProductVariantImportDraft>
 */
final class LineItemProductVariantImportDraftBuilder implements Builder
{
    /**
     * @var null|ProductKeyReference|ProductKeyReferenceBuilder
     */
    private $product;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?LineItemPriceCollection
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
     * <p>Maps to <code>ProductVariant.product</code>.</p>
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Maps to <code>ProductVariantImportDraft.sku</code>.</p>
     *
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Maps to <code>ProductVariantImportDraft.prices</code></p>
     *
     * @return null|LineItemPriceCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * <p>Maps to <code>ProductVariantImportDraft.attributes</code></p>
     *
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <p>Maps to <code>ProductVariantImportDraft.images</code>.</p>
     *
     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
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
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param ?LineItemPriceCollection $prices
     * @return $this
     */
    public function withPrices(?LineItemPriceCollection $prices)
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

    /**
     * @return $this
     */
    public function withProductBuilder(?ProductKeyReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    public function build(): LineItemProductVariantImportDraft
    {
        return new LineItemProductVariantImportDraftModel(
            $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product,
            $this->sku,
            $this->prices,
            $this->attributes,
            $this->images
        );
    }

    public static function of(): LineItemProductVariantImportDraftBuilder
    {
        return new self();
    }
}
