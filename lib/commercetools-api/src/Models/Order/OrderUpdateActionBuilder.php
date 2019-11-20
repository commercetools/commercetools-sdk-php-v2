<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderUpdateAction>
 */
final class OrderUpdateActionBuilder implements Builder
{
    public function build(): OrderUpdateAction
    {
        return new OrderUpdateActionModel(
        );
    }

    public static function of(): OrderUpdateActionBuilder
    {
        return new self();
    }
}
