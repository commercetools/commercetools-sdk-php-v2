<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingRateInputDraft>
 */
final class ShippingRateInputDraftBuilder implements Builder
{
    public function build(): ShippingRateInputDraft
    {
        return new ShippingRateInputDraftModel(
        );
    }

    public static function of(): ShippingRateInputDraftBuilder
    {
        return new self();
    }
}
