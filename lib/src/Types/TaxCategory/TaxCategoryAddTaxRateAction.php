<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

interface TaxCategoryAddTaxRateAction extends TaxCategoryUpdateAction
{
    const FIELD_TAX_RATE = 'taxRate';

    /**
     * @return TaxRateDraft
     */
    public function getTaxRate();

    /**
     * @param TaxRateDraft $taxRate
     * @return $this
     */
    public function setTaxRate(TaxRateDraft $taxRate);

}
