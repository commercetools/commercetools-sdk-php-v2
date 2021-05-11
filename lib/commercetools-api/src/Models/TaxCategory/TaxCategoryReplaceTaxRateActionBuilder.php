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
 * @implements Builder<TaxCategoryReplaceTaxRateAction>
 */
final class TaxCategoryReplaceTaxRateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $taxRateId;

    /**
     * @var null|TaxRateDraft|TaxRateDraftBuilder
     */
    private $taxRate;

    /**
     * @return null|string
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * @return null|TaxRateDraft
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * @param ?string $taxRateId
     * @return $this
     */
    public function withTaxRateId(?string $taxRateId)
    {
        $this->taxRateId = $taxRateId;

        return $this;
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

    public function build(): TaxCategoryReplaceTaxRateAction
    {
        return new TaxCategoryReplaceTaxRateActionModel(
            $this->taxRateId,
            $this->taxRate instanceof TaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate
        );
    }

    public static function of(): TaxCategoryReplaceTaxRateActionBuilder
    {
        return new self();
    }
}
