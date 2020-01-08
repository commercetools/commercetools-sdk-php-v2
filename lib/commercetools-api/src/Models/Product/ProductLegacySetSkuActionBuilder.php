<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductLegacySetSkuAction>
 */
final class ProductLegacySetSkuActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
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
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    public function build(): ProductLegacySetSkuAction
    {
        return new ProductLegacySetSkuActionModel(
            $this->sku,
            $this->variantId
        );
    }

    public static function of(): ProductLegacySetSkuActionBuilder
    {
        return new self();
    }
}
