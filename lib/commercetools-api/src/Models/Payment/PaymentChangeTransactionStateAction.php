<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;

interface PaymentChangeTransactionStateAction extends PaymentUpdateAction
{
    
    const FIELD_TRANSACTION_ID = 'transactionId';
    const FIELD_STATE = 'state';

    /**
     *
     * @return string|null
     */
    public function getTransactionId();
    
    /**
     *
     * @return string|null
     */
    public function getState();
    public function setTransactionId(?string $transactionId): void;
    
    public function setState(?string $state): void;
}