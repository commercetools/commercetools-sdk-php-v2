<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionModel;

class TaxCategoryReplaceTaxRateActionModel extends TaxCategoryUpdateActionModel implements TaxCategoryReplaceTaxRateAction {
    const DISCRIMINATOR_VALUE = 'replaceTaxRate';

    /**
     * @var string
     */
    protected $taxRateId;
    /**
     * @var TaxRateDraft
     */
    protected $taxRate;

    /**
     * @return string
     */
    public function getTaxRateId()
    {
        if (is_null($this->taxRateId)) {
            $value = $this->raw(TaxCategoryReplaceTaxRateAction::FIELD_TAX_RATE_ID);
            $value = (string)$value;
            $this->taxRateId = $value;
        }
        return $this->taxRateId;
    }
    /**
     * @return TaxRateDraft
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            $value = $this->raw(TaxCategoryReplaceTaxRateAction::FIELD_TAX_RATE);
            if (is_null($value)) {
                return $this->mapData(TaxRateDraft::class, null);
            }
            $value = $this->mapData(TaxRateDraft::class, $value);

            $this->taxRate = $value;
        }
        return $this->taxRate;
    }

    /**
     * @param string $taxRateId
     * @return $this
     */
    public function setTaxRateId(string $taxRateId)
    {
        $this->taxRateId = (string)$taxRateId;

        return $this;
    }
    /**
     * @param TaxRateDraft $taxRate
     * @return $this
     */
    public function setTaxRate(TaxRateDraft $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

}
