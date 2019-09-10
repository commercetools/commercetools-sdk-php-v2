<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;

interface ExternalTaxAmountDraft extends JsonObject
{
    
    const FIELD_TOTAL_GROSS = 'totalGross';
    const FIELD_TAX_RATE = 'taxRate';

    /**
     *
     * @return Money|null
     */
    public function getTotalGross();
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    public function getTaxRate();
    public function setTotalGross(?Money $totalGross): void;
    
    public function setTaxRate(?ExternalTaxRateDraft $taxRate): void;
}