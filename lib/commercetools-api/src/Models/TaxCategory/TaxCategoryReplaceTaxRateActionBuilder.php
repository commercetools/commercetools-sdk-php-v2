<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxCategoryReplaceTaxRateAction>
 */
final class TaxCategoryReplaceTaxRateActionBuilder implements Builder
{
    /**
     * @var TaxRateDraft|?TaxRateDraftBuilder
     */
    private $taxRate;

    /**
     * @var ?string
     */
    private $taxRateId;

    /**
     * @return null|TaxRateDraft
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * @return null|string
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * @return $this
     */
    public function withTaxRate(?TaxRateDraft $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxRateId(?string $taxRateId)
    {
        $this->taxRateId = $taxRateId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxRateBuilder(?TaxRateDraftBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    public function build(): TaxCategoryReplaceTaxRateAction
    {
        return new TaxCategoryReplaceTaxRateActionModel(
            ($this->taxRate instanceof TaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate),
            $this->taxRateId
        );
    }

    public static function of(): TaxCategoryReplaceTaxRateActionBuilder
    {
        return new self();
    }
}
