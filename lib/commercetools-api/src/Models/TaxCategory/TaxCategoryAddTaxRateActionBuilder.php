<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxCategoryAddTaxRateAction>
 */
final class TaxCategoryAddTaxRateActionBuilder implements Builder
{
    /**

     * @var null|TaxRateDraft|TaxRateDraftBuilder
     */
    private $taxRate;

    /**
     * <p>Value to append to the <code>rates</code> array.</p>
     *

     * @return null|TaxRateDraft
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * @param ?TaxRateDraft $taxRate
     * @return $this
     */
    public function withTaxRate(?TaxRateDraft $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @deprecated use withTaxRate() instead
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
            $this->taxRate instanceof TaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate
        );
    }

    public static function of(): TaxCategoryAddTaxRateActionBuilder
    {
        return new self();
    }
}
