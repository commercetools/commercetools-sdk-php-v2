<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Api\Models\Common\TypedMoneyDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxedPriceDraft>
 */
final class TaxedPriceDraftBuilder implements Builder
{
    /**

     * @var null|Money|MoneyBuilder
     */
    private $totalNet;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $totalGross;

    /**

     * @var ?TaxPortionDraftCollection
     */
    private $taxPortions;

    /**

     * @var null|TypedMoneyDraft|TypedMoneyDraftBuilder
     */
    private $totalTax;

    /**
     * <p>Total net price of the Cart or Order.</p>
     *

     * @return null|Money
     */
    public function getTotalNet()
    {
        return $this->totalNet instanceof MoneyBuilder ? $this->totalNet->build() : $this->totalNet;
    }

    /**
     * <p>Total gross price of the Cart or Order.</p>
     *

     * @return null|Money
     */
    public function getTotalGross()
    {
        return $this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross;
    }

    /**
     * <p>Taxable portions added to the <code>totalGross</code>.</p>
     * <p>Calculated from the <a href="ctp:api:type:TaxRate">TaxRates</a>.</p>
     *

     * @return null|TaxPortionDraftCollection
     */
    public function getTaxPortions()
    {
        return $this->taxPortions;
    }

    /**
     * <p>Total tax applicable for the Cart or Order.</p>
     *

     * @return null|TypedMoneyDraft
     */
    public function getTotalTax()
    {
        return $this->totalTax instanceof TypedMoneyDraftBuilder ? $this->totalTax->build() : $this->totalTax;
    }

    /**
     * @param ?Money $totalNet
     * @return $this
     */
    public function withTotalNet(?Money $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @param ?Money $totalGross
     * @return $this
     */
    public function withTotalGross(?Money $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @param ?TaxPortionDraftCollection $taxPortions
     * @return $this
     */
    public function withTaxPortions(?TaxPortionDraftCollection $taxPortions)
    {
        $this->taxPortions = $taxPortions;

        return $this;
    }

    /**
     * @param ?TypedMoneyDraft $totalTax
     * @return $this
     */
    public function withTotalTax(?TypedMoneyDraft $totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * @deprecated use withTotalNet() instead
     * @return $this
     */
    public function withTotalNetBuilder(?MoneyBuilder $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @deprecated use withTotalGross() instead
     * @return $this
     */
    public function withTotalGrossBuilder(?MoneyBuilder $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @deprecated use withTotalTax() instead
     * @return $this
     */
    public function withTotalTaxBuilder(?TypedMoneyDraftBuilder $totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    public function build(): TaxedPriceDraft
    {
        return new TaxedPriceDraftModel(
            $this->totalNet instanceof MoneyBuilder ? $this->totalNet->build() : $this->totalNet,
            $this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross,
            $this->taxPortions,
            $this->totalTax instanceof TypedMoneyDraftBuilder ? $this->totalTax->build() : $this->totalTax
        );
    }

    public static function of(): TaxedPriceDraftBuilder
    {
        return new self();
    }
}
