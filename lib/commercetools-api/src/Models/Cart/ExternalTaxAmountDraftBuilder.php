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
 * @implements Builder<ExternalTaxAmountDraft>
 */
final class ExternalTaxAmountDraftBuilder implements Builder
{
    /**
     * @var ExternalTaxRateDraft|?ExternalTaxRateDraftBuilder
     */
    private $taxRate;

    /**
     * @var Money|?MoneyBuilder
     */
    private $totalGross;

    public function __construct()
    {
    }

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof ExternalTaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * @return null|Money
     */
    public function getTotalGross()
    {
        return $this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross;
    }

    /**
     * @return $this
     */
    public function withTaxRate(?ExternalTaxRateDraft $taxRate)
    {
        $this->taxRate = $taxRate;

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
    public function withTaxRateBuilder(?ExternalTaxRateDraftBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

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

    public function build(): ExternalTaxAmountDraft
    {
        return new ExternalTaxAmountDraftModel(
            ($this->taxRate instanceof ExternalTaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate),
            ($this->totalGross instanceof MoneyBuilder ? $this->totalGross->build() : $this->totalGross)
        );
    }

    public static function of(): ExternalTaxAmountDraftBuilder
    {
        return new self();
    }
}
