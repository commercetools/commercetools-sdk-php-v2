<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;

interface CartSetCartTotalTaxAction extends CartUpdateAction
{
    
    const FIELD_EXTERNAL_TOTAL_GROSS = 'externalTotalGross';
    const FIELD_EXTERNAL_TAX_PORTIONS = 'externalTaxPortions';

    /**
     *
     * @return Money|null
     */
    public function getExternalTotalGross();
    
    /**
     *
     * @return TaxPortionCollection|null
     */
    public function getExternalTaxPortions();
    public function setExternalTotalGross(?Money $externalTotalGross): void;
    
    public function setExternalTaxPortions(?TaxPortionCollection $externalTaxPortions): void;
}