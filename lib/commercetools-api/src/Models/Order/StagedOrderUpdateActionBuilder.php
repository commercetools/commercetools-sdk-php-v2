<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderUpdateAction>
 */
final class StagedOrderUpdateActionBuilder implements Builder
{
    public function build(): StagedOrderUpdateAction
    {
        return new StagedOrderUpdateActionModel(
        );
    }

    public static function of(): StagedOrderUpdateActionBuilder
    {
        return new self();
    }
}
