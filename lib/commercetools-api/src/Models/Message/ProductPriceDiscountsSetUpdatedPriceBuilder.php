<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductPriceDiscountsSetUpdatedPrice>
 */
final class ProductPriceDiscountsSetUpdatedPriceBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var ?string
     */
    private $variantKey;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?string
     */
    private $priceId;

    /**

     * @var null|DiscountedPrice|DiscountedPriceBuilder
     */
    private $discounted;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> for which the Discount was set.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>Key of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> for which Discount was set.</p>
     *

     * @return null|string
     */
    public function getVariantKey()
    {
        return $this->variantKey;
    }

    /**
     * <p>SKU of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> for which Discount was set.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Price">Embedded Price</a>.</p>
     *

     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * <p>Discounted Price for the <a href="ctp:api:type:ProductVariant">ProductVariant</a> for which Discount was set.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        return $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted;
    }

    /**
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">ProductProjection</a>.</p>
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
     * @param ?string $variantKey
     * @return $this
     */
    public function withVariantKey(?string $variantKey)
    {
        $this->variantKey = $variantKey;

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
     * @param ?string $priceId
     * @return $this
     */
    public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;

        return $this;
    }

    /**
     * @param ?DiscountedPrice $discounted
     * @return $this
     */
    public function withDiscounted(?DiscountedPrice $discounted)
    {
        $this->discounted = $discounted;

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
     * @deprecated use withDiscounted() instead
     * @return $this
     */
    public function withDiscountedBuilder(?DiscountedPriceBuilder $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    public function build(): ProductPriceDiscountsSetUpdatedPrice
    {
        return new ProductPriceDiscountsSetUpdatedPriceModel(
            $this->variantId,
            $this->variantKey,
            $this->sku,
            $this->priceId,
            $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted,
            $this->staged
        );
    }

    public static function of(): ProductPriceDiscountsSetUpdatedPriceBuilder
    {
        return new self();
    }
}
