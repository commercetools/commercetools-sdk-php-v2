<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CategoryOrderHints>
 */
final class CategoryOrderHintsBuilder implements Builder
{
    public function __construct()
    {
    }

    public function build(): CategoryOrderHints
    {
        return new CategoryOrderHintsModel(
        );
    }

    public static function of(): CategoryOrderHintsBuilder
    {
        return new self();
    }
}
