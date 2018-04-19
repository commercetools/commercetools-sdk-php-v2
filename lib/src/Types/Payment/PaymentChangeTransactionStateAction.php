<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

interface PaymentChangeTransactionStateAction extends PaymentUpdateAction
{
    const FIELD_STATE = 'state';
    const FIELD_TRANSACTION_ID = 'transactionId';

    /**
     * @return string
     */
    public function getState();

    /**
     * @return string
     */
    public function getTransactionId();

    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state);

    /**
     * @param string $transactionId
     * @return $this
     */
    public function setTransactionId(string $transactionId);

}
