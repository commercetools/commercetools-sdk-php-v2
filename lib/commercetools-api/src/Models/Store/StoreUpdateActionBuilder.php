<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StoreUpdateAction>
 */
final class StoreUpdateActionBuilder implements Builder
{
    public function build(): StoreUpdateAction
    {
        return new StoreUpdateActionModel(
        );
    }

    public static function of(): StoreUpdateActionBuilder
    {
        return new self();
    }
}
