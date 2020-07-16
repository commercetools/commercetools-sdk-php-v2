<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
