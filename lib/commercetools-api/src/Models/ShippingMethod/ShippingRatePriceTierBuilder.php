<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingRatePriceTier>
 */
final class ShippingRatePriceTierBuilder implements Builder
{
    public function build(): ShippingRatePriceTier
    {
        return new ShippingRatePriceTierModel(
        );
    }

    public static function of(): ShippingRatePriceTierBuilder
    {
        return new self();
    }
}
