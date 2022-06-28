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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxedPrice>
 */
final class TaxedPriceBuilder implements Builder
{
    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $totalNet;

    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $totalGross;

    /**
     * @var ?TaxPortionCollection
     */
    private $taxPortions;

    /**
     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $totalTax;

    /**
     * @return null|TypedMoney
     */
    public function getTotalNet()
    {
        return $this->totalNet instanceof TypedMoneyBuilder ? $this->totalNet->build() : $this->totalNet;
    }

    /**
     * @return null|TypedMoney
     */
    public function getTotalGross()
    {
        return $this->totalGross instanceof TypedMoneyBuilder ? $this->totalGross->build() : $this->totalGross;
    }

    /**
     * <p>TaxedPrice fields that can be used in query predicates: <code>totalNet</code>, <code>totalGross</code>.</p>
     *
     * @return null|TaxPortionCollection
     */
    public function getTaxPortions()
    {
        return $this->taxPortions;
    }

    /**
     * <p>Calculated automatically as the subtraction of <code>totalGross</code> - <code>totalNet</code>.</p>
     *
     * @return null|TypedMoney
     */
    public function getTotalTax()
    {
        return $this->totalTax instanceof TypedMoneyBuilder ? $this->totalTax->build() : $this->totalTax;
    }

    /**
     * @param ?TypedMoney $totalNet
     * @return $this
     */
    public function withTotalNet(?TypedMoney $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @param ?TypedMoney $totalGross
     * @return $this
     */
    public function withTotalGross(?TypedMoney $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @param ?TaxPortionCollection $taxPortions
     * @return $this
     */
    public function withTaxPortions(?TaxPortionCollection $taxPortions)
    {
        $this->taxPortions = $taxPortions;

        return $this;
    }

    /**
     * @param ?TypedMoney $totalTax
     * @return $this
     */
    public function withTotalTax(?TypedMoney $totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * @deprecated use withTotalNet() instead
     * @return $this
     */
    public function withTotalNetBuilder(?TypedMoneyBuilder $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @deprecated use withTotalGross() instead
     * @return $this
     */
    public function withTotalGrossBuilder(?TypedMoneyBuilder $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @deprecated use withTotalTax() instead
     * @return $this
     */
    public function withTotalTaxBuilder(?TypedMoneyBuilder $totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    public function build(): TaxedPrice
    {
        return new TaxedPriceModel(
            $this->totalNet instanceof TypedMoneyBuilder ? $this->totalNet->build() : $this->totalNet,
            $this->totalGross instanceof TypedMoneyBuilder ? $this->totalGross->build() : $this->totalGross,
            $this->taxPortions,
            $this->totalTax instanceof TypedMoneyBuilder ? $this->totalTax->build() : $this->totalTax
        );
    }

    public static function of(): TaxedPriceBuilder
    {
        return new self();
    }
}
