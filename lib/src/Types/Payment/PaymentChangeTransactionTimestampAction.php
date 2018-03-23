<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

interface PaymentChangeTransactionTimestampAction extends PaymentUpdateAction {
    const FIELD_TIMESTAMP = 'timestamp';
    const FIELD_TRANSACTION_ID = 'transactionId';

    /**
     * @return \DateTimeImmutable
     */
    public function getTimestamp();

    /**
     * @return string
     */
    public function getTransactionId();

    /**
     * @param \DateTimeImmutable $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp);

    /**
     * @param string $transactionId
     * @return $this
     */
    public function setTransactionId(string $transactionId);

}
