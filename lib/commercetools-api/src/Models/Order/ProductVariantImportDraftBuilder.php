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
     * @var ?ImageCollection
     */
    private $images;

    /**
     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * @var ?int
     */
    private $id;

    /**
     * @var ?PriceDraftCollection
     */
    private $prices;

    /**
     * @var ?string
     */
    private $sku;

    public function __construct()
    {
    }

    /**
     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
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
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
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
    public function withPrices(?PriceDraftCollection $prices)
    {
        $this->prices = $prices;

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

    public function build(): ProductVariantImportDraft
    {
        return new ProductVariantImportDraftModel(
            $this->images,
            $this->attributes,
            $this->id,
            $this->prices,
            $this->sku
        );
    }

    public static function of(): ProductVariantImportDraftBuilder
    {
        return new self();
    }
}
