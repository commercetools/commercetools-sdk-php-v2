<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

interface PaymentTransactionStateChangedMessage extends Message
{
    const FIELD_TRANSACTION_ID = 'transactionId';
    const FIELD_STATE = 'state';

    /**
     * @return string
     */
    public function getTransactionId();

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string $transactionId
     * @return $this
     */
    public function setTransactionId(string $transactionId);

    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state);

}
