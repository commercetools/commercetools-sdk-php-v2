<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountValueGiftLineItem>
 */
final class CartDiscountValueGiftLineItemBuilder implements Builder
{
    /**
     * @var ProductReference|?ProductReferenceBuilder
     */
    private $product;

    /**
     * @var ChannelReference|?ChannelReferenceBuilder
     */
    private $supplyChannel;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ChannelReference|?ChannelReferenceBuilder
     */
    private $distributionChannel;

    /**
     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * @return null|ChannelReference
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|ChannelReference
     */
    public function getDistributionChannel()
    {
        return $this->distributionChannel instanceof ChannelReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel;
    }

    /**
     * @return $this
     */
    public function withProduct(?ProductReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSupplyChannel(?ChannelReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
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
    public function withDistributionChannel(?ChannelReference $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductBuilder(?ProductReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelReferenceBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDistributionChannelBuilder(?ChannelReferenceBuilder $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

    public function build(): CartDiscountValueGiftLineItem
    {
        return new CartDiscountValueGiftLineItemModel(
            ($this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product),
            ($this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel),
            $this->variantId,
            ($this->distributionChannel instanceof ChannelReferenceBuilder ? $this->distributionChannel->build() : $this->distributionChannel)
        );
    }

    public static function of(): CartDiscountValueGiftLineItemBuilder
    {
        return new self();
    }
}
