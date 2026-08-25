<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSetPricesAction>
 */
final class ProductSetPricesActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?PriceDraftCollection
     */
    private $prices;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The <code>id</code> of the ProductVariant to update.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>The <code>sku</code> of the ProductVariant to update.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>The Embedded Prices to set.</p>
     * <p>If any two Embedded Prices in this array have the same key, a <a href="ctp:api:type:DuplicatePriceKeyError">DuplicatePriceKey</a> error is returned.</p>
     * <p>If any two Embedded Prices in this array have the same price scope, a <a href="ctp:api:type:DuplicatePriceScopeError">DuplicatePriceScope</a> error is returned.</p>
     * <p>If any two Embedded Prices in this array have overlapping validity periods within the same price scope, an <a href="ctp:api:type:OverlappingPriceValidityError">OverlappingPriceValidity</a> error is returned. An Embedded Price without validity period does not conflict with an Embedded Price defined for a time period.</p>
     *

     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * <p>Whether only the staged ProductVariant is updated. If <code>false</code>, both the current and staged ProductVariant are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

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
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): ProductSetPricesAction
    {
        return new ProductSetPricesActionModel(
            $this->variantId,
            $this->sku,
            $this->prices,
            $this->staged
        );
    }

    public static function of(): ProductSetPricesActionBuilder
    {
        return new self();
    }
}
