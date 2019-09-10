<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\TypedMoney;

interface TaxedItemPrice extends JsonObject
{
    
    const FIELD_TOTAL_NET = 'totalNet';
    const FIELD_TOTAL_GROSS = 'totalGross';

    /**
     *
     * @return TypedMoney|null
     */
    public function getTotalNet();
    
    /**
     *
     * @return TypedMoney|null
     */
    public function getTotalGross();
    public function setTotalNet(?TypedMoney $totalNet): void;
    
    public function setTotalGross(?TypedMoney $totalGross): void;
}