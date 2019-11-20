<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartChangeTaxRoundingModeAction>
 */
final class CartChangeTaxRoundingModeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $taxRoundingMode;

    /**
     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        return $this->taxRoundingMode;
    }

    /**
     * @return $this
     */
    public function withTaxRoundingMode(?string $taxRoundingMode)
    {
        $this->taxRoundingMode = $taxRoundingMode;

        return $this;
    }

    public function build(): CartChangeTaxRoundingModeAction
    {
        return new CartChangeTaxRoundingModeActionModel(
            $this->taxRoundingMode
        );
    }

    public static function of(): CartChangeTaxRoundingModeActionBuilder
    {
        return new self();
    }
}
