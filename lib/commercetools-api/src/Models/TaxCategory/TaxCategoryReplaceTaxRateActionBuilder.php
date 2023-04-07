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

     * @var ?string
     */
    private $taxRateKey;

    /**

     * @var null|TaxRateDraft|TaxRateDraftBuilder
     */
    private $taxRate;

    /**
     * <p>ID of the TaxRate to replace.
     * Either <code>taxRateId</code> or <code>taxRateKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * <p>Key of the TaxRate to replace.
     * Either <code>taxRateId</code> or <code>taxRateKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getTaxRateKey()
    {
        return $this->taxRateKey;
    }

    /**
     * <p>New TaxRate to replace with.</p>
     *

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
     * @param ?string $taxRateKey
     * @return $this
     */
    public function withTaxRateKey(?string $taxRateKey)
    {
        $this->taxRateKey = $taxRateKey;

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
            $this->taxRateKey,
            $this->taxRate instanceof TaxRateDraftBuilder ? $this->taxRate->build() : $this->taxRate
        );
    }

    public static function of(): TaxCategoryReplaceTaxRateActionBuilder
    {
        return new self();
    }
}
