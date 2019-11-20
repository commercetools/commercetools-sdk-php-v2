<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductRevertStagedChangesAction>
 */
final class ProductRevertStagedChangesActionBuilder implements Builder
{
    public function build(): ProductRevertStagedChangesAction
    {
        return new ProductRevertStagedChangesActionModel(
        );
    }

    public static function of(): ProductRevertStagedChangesActionBuilder
    {
        return new self();
    }
}
