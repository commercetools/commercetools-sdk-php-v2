<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxedPrice>
 */
final class TaxedPriceBuilder implements Builder
{
    /**
     * @var ?TaxPortionCollection
     */
    private $taxPortions;

    /**
     * @var Money|?MoneyBuilder
     */
    private $totalGross;

    /**
     * @var Money|?MoneyBuilder
     */
    private $totalNet;

    public function __construct()
    {
    }

    /**
     * @return null|TaxPortionCollection
     */
    public function getTaxPortions()
    {
        return $this->taxPortions;
    }

    /**
     * @return null|Money
     */
    public function getTotalGross()
    {
        return $this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross;
    }

    /**
     * @return null|Money
     */
    public function getTotalNet()
    {
        return $this->totalNet instanceof MoneyBuilder ? $this->totalNet->build() : $this->totalNet;
    }

    /**
     * @return $this
     */
    public function withTaxPortions(?TaxPortionCollection $taxPortions)
    {
        $this->taxPortions = $taxPortions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalGross(?Money $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalNet(?Money $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalGrossBuilder(?MoneyBuilder $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalNetBuilder(?MoneyBuilder $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    public function build(): TaxedPrice
    {
        return new TaxedPriceModel(
            $this->taxPortions,
            ($this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross),
            ($this->totalNet instanceof MoneyBuilder ? $this->totalNet->build() : $this->totalNet)
        );
    }

    public static function of(): TaxedPriceBuilder
    {
        return new self();
    }
}
