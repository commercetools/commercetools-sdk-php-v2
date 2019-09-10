<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;
use DateTimeImmutable;

interface PaymentSetAuthorizationAction extends PaymentUpdateAction
{
    
    const FIELD_AMOUNT = 'amount';
    const FIELD_UNTIL = 'until';

    /**
     *
     * @return Money|null
     */
    public function getAmount();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getUntil();
    public function setAmount(?Money $amount): void;
    
    public function setUntil(?DateTimeImmutable $until): void;
}