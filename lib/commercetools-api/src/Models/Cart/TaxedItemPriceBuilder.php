<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxedItemPrice>
 */
final class TaxedItemPriceBuilder implements Builder
{
    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $totalGross;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $totalNet;

    /**
     * @return null|TypedMoney
     */
    public function getTotalGross()
    {
        return $this->totalGross instanceof TypedMoneyBuilder ? $this->totalGross->build() : $this->totalGross;
    }

    /**
     * @return null|TypedMoney
     */
    public function getTotalNet()
    {
        return $this->totalNet instanceof TypedMoneyBuilder ? $this->totalNet->build() : $this->totalNet;
    }

    /**
     * @return $this
     */
    public function withTotalGross(?TypedMoney $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalNet(?TypedMoney $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalGrossBuilder(?TypedMoneyBuilder $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalNetBuilder(?TypedMoneyBuilder $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    public function build(): TaxedItemPrice
    {
        return new TaxedItemPriceModel(
            ($this->totalGross instanceof TypedMoneyBuilder ? $this->totalGross->build() : $this->totalGross),
            ($this->totalNet instanceof TypedMoneyBuilder ? $this->totalNet->build() : $this->totalNet)
        );
    }

    public static function of(): TaxedItemPriceBuilder
    {
        return new self();
    }
}
