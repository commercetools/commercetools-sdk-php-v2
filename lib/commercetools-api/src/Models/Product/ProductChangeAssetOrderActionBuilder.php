<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductChangeAssetOrderAction>
 */
final class ProductChangeAssetOrderActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $assetOrder;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @return null|array
     */
    public function getAssetOrder()
    {
        return $this->assetOrder;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

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
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return $this
     */
    public function withAssetOrder(?array $assetOrder)
    {
        $this->assetOrder = $assetOrder;

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
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

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

    public function build(): ProductChangeAssetOrderAction
    {
        return new ProductChangeAssetOrderActionModel(
            $this->assetOrder,
            $this->staged,
            $this->variantId,
            $this->sku
        );
    }

    public static function of(): ProductChangeAssetOrderActionBuilder
    {
        return new self();
    }
}
