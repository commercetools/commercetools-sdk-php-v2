<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceBuilder;

/**
 * @implements Builder<ProductPriceExternalDiscountSetMessagePayload>
 */
final class ProductPriceExternalDiscountSetMessagePayloadBuilder implements Builder
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
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|string
     */
    public function getVariantKey()
    {
        return $this->variantKey;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        return $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantKey(?string $variantKey)
    {
        $this->variantKey = $variantKey;

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
    public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscounted(?DiscountedPrice $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountedBuilder(?DiscountedPriceBuilder $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    public function build(): ProductPriceExternalDiscountSetMessagePayload
    {
        return new ProductPriceExternalDiscountSetMessagePayloadModel(
            $this->variantId,
            $this->variantKey,
            $this->sku,
            $this->priceId,
            $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted,
            $this->staged
        );
    }

    public static function of(): ProductPriceExternalDiscountSetMessagePayloadBuilder
    {
        return new self();
    }
}
