<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductRevertStagedVariantChangesAction>
 */
final class ProductRevertStagedVariantChangesActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $variantId;

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
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    public function build(): ProductRevertStagedVariantChangesAction
    {
        return new ProductRevertStagedVariantChangesActionModel(
            $this->variantId
        );
    }

    public static function of(): ProductRevertStagedVariantChangesActionBuilder
    {
        return new self();
    }
}
