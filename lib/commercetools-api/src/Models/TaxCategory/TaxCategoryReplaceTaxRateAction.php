<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObject;

interface TaxCategoryReplaceTaxRateAction extends TaxCategoryUpdateAction
{
    
    const FIELD_TAX_RATE_ID = 'taxRateId';
    const FIELD_TAX_RATE = 'taxRate';

    /**
     *
     * @return string|null
     */
    public function getTaxRateId();
    
    /**
     *
     * @return TaxRateDraft|null
     */
    public function getTaxRate();
    public function setTaxRateId(?string $taxRateId): void;
    
    public function setTaxRate(?TaxRateDraft $taxRate): void;
}