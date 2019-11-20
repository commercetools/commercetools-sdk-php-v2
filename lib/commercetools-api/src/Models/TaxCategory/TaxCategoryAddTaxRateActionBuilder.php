<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxCategoryAddTaxRateAction>
 */
final class TaxCategoryAddTaxRateActionBuilder implements Builder
{
    /**
     * @var TaxRateDraft|?TaxRateDraftBuilder
     */
    private $taxRate;

    /**
     * @return null|TaxRateDraft
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate;
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
    public function withTaxRateBuilder(?TaxRateDraftBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    public function build(): TaxCategoryAddTaxRateAction
    {
        return new TaxCategoryAddTaxRateActionModel(
            ($this->taxRate instanceof TaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate)
        );
    }

    public static function of(): TaxCategoryAddTaxRateActionBuilder
    {
        return new self();
    }
}
