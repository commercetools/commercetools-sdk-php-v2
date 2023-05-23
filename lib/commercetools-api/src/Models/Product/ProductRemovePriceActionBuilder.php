<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\Common\PriceDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductRemovePriceAction>
 */
final class ProductRemovePriceActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $priceId;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var null|PriceDraft|PriceDraftBuilder
     */
    private $price;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The <code>id</code> of the Embedded Price to remove.</p>
     *

     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * <p>The <code>sku</code> of the ProductVariant the provided Price should be removed from.
     * Either 'variantId' or 'sku' is required&quot; when <code>priceId</code> is not provided.
     * This field is now deprecated, use 'priceId' instead.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>The <code>id</code> of the ProductVariant the provided Price should be removed from.
     * Either 'variantId' or 'sku' is required&quot; when <code>priceId</code> is not provided.
     * This field is now deprecated, use 'priceId' instead.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>The Price identical to the one to be removed from the ProductVariant.
     * This field is now deprecated, use 'priceId' instead.</p>
     *

     * @return null|PriceDraft
     */
    public function getPrice()
    {
        return $this->price instanceof PriceDraftBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>If <code>true</code>, only the staged Embedded Price is removed. If <code>false</code>, both the current and staged Embedded Price are removed.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?string $priceId
     * @return $this
     */
    public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;

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
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @param ?PriceDraft $price
     * @return $this
     */
    public function withPrice(?PriceDraft $price)
    {
        $this->price = $price;

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

    /**
     * @deprecated use withPrice() instead
     * @return $this
     */
    public function withPriceBuilder(?PriceDraftBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    public function build(): ProductRemovePriceAction
    {
        return new ProductRemovePriceActionModel(
            $this->priceId,
            $this->sku,
            $this->variantId,
            $this->price instanceof PriceDraftBuilder ? $this->price->build() : $this->price,
            $this->staged
        );
    }

    public static function of(): ProductRemovePriceActionBuilder
    {
        return new self();
    }
}
