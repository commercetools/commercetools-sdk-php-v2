<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Api\Models\Common\TypedMoneyDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxedPriceDraft>
 */
final class TaxedPriceDraftBuilder implements Builder
{
    /**
     * @var ?TaxPortionDraftCollection
     */
    private $taxPortions;

    /**
     * @var TypedMoneyDraft|?TypedMoneyDraftBuilder
     */
    private $totalGross;

    /**
     * @var TypedMoneyDraft|?TypedMoneyDraftBuilder
     */
    private $totalNet;

    public function __construct()
    {
    }

    /**
     * @return null|TaxPortionDraftCollection
     */
    public function getTaxPortions()
    {
        return $this->taxPortions;
    }

    /**
     * @return null|TypedMoneyDraft
     */
    public function getTotalGross()
    {
        return $this->totalGross instanceof TypedMoneyDraftBuilder ? $this->totalGross->build() : $this->totalGross;
    }

    /**
     * @return null|TypedMoneyDraft
     */
    public function getTotalNet()
    {
        return $this->totalNet instanceof TypedMoneyDraftBuilder ? $this->totalNet->build() : $this->totalNet;
    }

    /**
     * @return $this
     */
    public function withTaxPortions(?TaxPortionDraftCollection $taxPortions)
    {
        $this->taxPortions = $taxPortions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalGross(?TypedMoneyDraft $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalNet(?TypedMoneyDraft $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalGrossBuilder(?TypedMoneyDraftBuilder $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalNetBuilder(?TypedMoneyDraftBuilder $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    public function build(): TaxedPriceDraft
    {
        return new TaxedPriceDraftModel(
            $this->taxPortions,
            ($this->totalGross instanceof TypedMoneyDraftBuilder ? $this->totalGross->build() : $this->totalGross),
            ($this->totalNet instanceof TypedMoneyDraftBuilder ? $this->totalNet->build() : $this->totalNet)
        );
    }

    public static function of(): TaxedPriceDraftBuilder
    {
        return new self();
    }
}
