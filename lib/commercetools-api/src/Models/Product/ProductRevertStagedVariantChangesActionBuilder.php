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
 * @implements Builder<ProductRevertStagedVariantChangesAction>
 */
final class ProductRevertStagedVariantChangesActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $variantId;

    /**
     * <p>The <code>id</code> of the ProductVariant to revert.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
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
