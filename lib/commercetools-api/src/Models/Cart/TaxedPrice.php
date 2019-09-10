<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;

interface TaxedPrice extends JsonObject
{
    
    const FIELD_TOTAL_NET = 'totalNet';
    const FIELD_TOTAL_GROSS = 'totalGross';
    const FIELD_TAX_PORTIONS = 'taxPortions';

    /**
     *
     * @return Money|null
     */
    public function getTotalNet();
    
    /**
     *
     * @return Money|null
     */
    public function getTotalGross();
    
    /**
     *
     * @return TaxPortionCollection|null
     */
    public function getTaxPortions();
    public function setTotalNet(?Money $totalNet): void;
    
    public function setTotalGross(?Money $totalGross): void;
    
    public function setTaxPortions(?TaxPortionCollection $taxPortions): void;
}