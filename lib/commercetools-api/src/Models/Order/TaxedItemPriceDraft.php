<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;

interface TaxedItemPriceDraft extends JsonObject
{
    
    const FIELD_TOTAL_NET = 'totalNet';
    const FIELD_TOTAL_GROSS = 'totalGross';

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
    public function setTotalNet(?Money $totalNet): void;
    
    public function setTotalGross(?Money $totalGross): void;
}