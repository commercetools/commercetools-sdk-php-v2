<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;

interface OrderPaymentStateChangedMessage extends Message
{
    
    const FIELD_PAYMENT_STATE = 'paymentState';
    const FIELD_OLD_PAYMENT_STATE = 'oldPaymentState';

    /**
     *
     * @return string|null
     */
    public function getPaymentState();
    
    /**
     *
     * @return string|null
     */
    public function getOldPaymentState();
    public function setPaymentState(?string $paymentState): void;
    
    public function setOldPaymentState(?string $oldPaymentState): void;
}