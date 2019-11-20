<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderEditUpdateAction>
 */
final class OrderEditUpdateActionBuilder implements Builder
{
    public function build(): OrderEditUpdateAction
    {
        return new OrderEditUpdateActionModel(
        );
    }

    public static function of(): OrderEditUpdateActionBuilder
    {
        return new self();
    }
}
