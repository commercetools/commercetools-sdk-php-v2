<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

interface TaxCategoryReplaceTaxRateAction extends TaxCategoryUpdateAction
{
    const FIELD_TAX_RATE_ID = 'taxRateId';
    const FIELD_TAX_RATE = 'taxRate';

    /**
     * @return string
     */
    public function getTaxRateId();

    /**
     * @return TaxRateDraft
     */
    public function getTaxRate();

    /**
     * @param string $taxRateId
     * @return $this
     */
    public function setTaxRateId(string $taxRateId);

    /**
     * @param TaxRateDraft $taxRate
     * @return $this
     */
    public function setTaxRate(TaxRateDraft $taxRate);

}
