<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\QueryPrice;
use Commercetools\Api\Models\Common\QueryPriceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductDiscountMatchQuery>
 */
final class ProductDiscountMatchQueryBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $productId;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var QueryPrice|?QueryPriceBuilder
     */
    private $price;

    /**
     * @return null|string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return null|QueryPrice
     */
    public function getPrice()
    {
        return $this->price instanceof QueryPriceBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return $this
     */
    public function withProductId(?string $productId)
    {
        $this->productId = $productId;

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
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrice(?QueryPrice $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceBuilder(?QueryPriceBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    public function build(): ProductDiscountMatchQuery
    {
        return new ProductDiscountMatchQueryModel(
            $this->productId,
            $this->variantId,
            $this->staged,
            ($this->price instanceof QueryPriceBuilder ? $this->price->build() : $this->price)
        );
    }

    public static function of(): ProductDiscountMatchQueryBuilder
    {
        return new self();
    }
}
