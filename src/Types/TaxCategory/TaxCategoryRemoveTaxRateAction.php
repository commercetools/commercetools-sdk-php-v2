<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

interface TaxCategoryRemoveTaxRateAction extends TaxCategoryUpdateAction {
    const FIELD_TAX_RATE_ID = 'taxRateId';

    /**
     * @return string
     */
    public function getTaxRateId();

    /**
     * @param string $taxRateId
     * @return $this
     */
    public function setTaxRateId(string $taxRateId);

}
