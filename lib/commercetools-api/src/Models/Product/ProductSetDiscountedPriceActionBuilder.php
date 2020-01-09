<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductSetDiscountedPriceAction>
 */
final class ProductSetDiscountedPriceActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $priceId;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var null|DiscountedPrice|DiscountedPriceBuilder
     */
    private $discounted;

    /**
     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        return $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted;
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
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

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
    public function withDiscountedBuilder(?DiscountedPriceBuilder $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    public function build(): ProductSetDiscountedPriceAction
    {
        return new ProductSetDiscountedPriceActionModel(
            $this->priceId,
            $this->staged,
            $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted
        );
    }

    public static function of(): ProductSetDiscountedPriceActionBuilder
    {
        return new self();
    }
}
