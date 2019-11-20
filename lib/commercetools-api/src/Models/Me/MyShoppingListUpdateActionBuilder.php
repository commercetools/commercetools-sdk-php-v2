<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyShoppingListUpdateAction>
 */
final class MyShoppingListUpdateActionBuilder implements Builder
{
    public function build(): MyShoppingListUpdateAction
    {
        return new MyShoppingListUpdateActionModel(
        );
    }

    public static function of(): MyShoppingListUpdateActionBuilder
    {
        return new self();
    }
}
