<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;

interface PaymentSetAmountPaidAction extends PaymentUpdateAction
{
    
    const FIELD_AMOUNT = 'amount';

    /**
     *
     * @return Money|null
     */
    public function getAmount();
    public function setAmount(?Money $amount): void;
}