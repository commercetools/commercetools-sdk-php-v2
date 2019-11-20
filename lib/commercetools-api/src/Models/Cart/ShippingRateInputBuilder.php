<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingRateInput>
 */
final class ShippingRateInputBuilder implements Builder
{
    public function build(): ShippingRateInput
    {
        return new ShippingRateInputModel(
        );
    }

    public static function of(): ShippingRateInputBuilder
    {
        return new self();
    }
}
