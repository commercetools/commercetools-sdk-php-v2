<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CategoryUpdateAction>
 */
final class CategoryUpdateActionBuilder implements Builder
{
    public function build(): CategoryUpdateAction
    {
        return new CategoryUpdateActionModel(
        );
    }

    public static function of(): CategoryUpdateActionBuilder
    {
        return new self();
    }
}
