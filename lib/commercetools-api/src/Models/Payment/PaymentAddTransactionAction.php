<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;

interface PaymentAddTransactionAction extends PaymentUpdateAction
{
    
    const FIELD_TRANSACTION = 'transaction';

    /**
     *
     * @return TransactionDraft|null
     */
    public function getTransaction();
    public function setTransaction(?TransactionDraft $transaction): void;
}