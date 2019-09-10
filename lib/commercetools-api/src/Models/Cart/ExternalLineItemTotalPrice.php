<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;

interface ExternalLineItemTotalPrice extends JsonObject
{
    
    const FIELD_PRICE = 'price';
    const FIELD_TOTAL_PRICE = 'totalPrice';

    /**
     *
     * @return Money|null
     */
    public function getPrice();
    
    /**
     *
     * @return Money|null
     */
    public function getTotalPrice();
    public function setPrice(?Money $price): void;
    
    public function setTotalPrice(?Money $totalPrice): void;
}