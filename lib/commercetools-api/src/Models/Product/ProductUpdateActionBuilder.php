<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductUpdateAction>
 */
final class ProductUpdateActionBuilder implements Builder
{
    public function build(): ProductUpdateAction
    {
        return new ProductUpdateActionModel(
        );
    }

    public static function of(): ProductUpdateActionBuilder
    {
        return new self();
    }
}
