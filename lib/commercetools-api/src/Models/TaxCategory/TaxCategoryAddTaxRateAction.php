<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

interface TaxCategoryAddTaxRateAction extends TaxCategoryUpdateAction
{
    const FIELD_TAX_RATE = 'taxRate';

    /**
     * @return null|TaxRateDraft
     */
    public function getTaxRate();

    public function setTaxRate(?TaxRateDraft $taxRate): void;
}
