<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\MoneyCollection;

interface ProductDiscountValueAbsolute extends ProductDiscountValue
{
    
    const FIELD_MONEY = 'money';

    /**
     *
     * @return MoneyCollection|null
     */
    public function getMoney();
    public function setMoney(?MoneyCollection $money): void;
}