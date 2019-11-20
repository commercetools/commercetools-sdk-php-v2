<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingMethodUpdateAction>
 */
final class ShippingMethodUpdateActionBuilder implements Builder
{
    public function build(): ShippingMethodUpdateAction
    {
        return new ShippingMethodUpdateActionModel(
        );
    }

    public static function of(): ShippingMethodUpdateActionBuilder
    {
        return new self();
    }
}
