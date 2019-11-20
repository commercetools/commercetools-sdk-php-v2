<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartChangeTaxModeAction>
 */
final class CartChangeTaxModeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $taxMode;

    /**
     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

        return $this;
    }

    public function build(): CartChangeTaxModeAction
    {
        return new CartChangeTaxModeActionModel(
            $this->taxMode
        );
    }

    public static function of(): CartChangeTaxModeActionBuilder
    {
        return new self();
    }
}
