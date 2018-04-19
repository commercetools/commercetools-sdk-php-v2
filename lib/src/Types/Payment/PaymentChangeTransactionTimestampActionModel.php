<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Payment\PaymentUpdateActionModel;

class PaymentChangeTransactionTimestampActionModel extends PaymentUpdateActionModel implements PaymentChangeTransactionTimestampAction
{
    const DISCRIMINATOR_VALUE = 'changeTransactionTimestamp';

    /**
     * @var \DateTimeImmutable
     */
    protected $timestamp;
    /**
     * @var string
     */
    protected $transactionId;

    /**
     * @return \DateTimeImmutable
     */
    public function getTimestamp()
    {
        if (is_null($this->timestamp)) {
            $value = $this->raw(PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->timestamp = $value;
        }
        return $this->timestamp;
    }
    /**
     * @return string
     */
    public function getTransactionId()
    {
        if (is_null($this->transactionId)) {
            $value = $this->raw(PaymentChangeTransactionTimestampAction::FIELD_TRANSACTION_ID);
            $value = (string)$value;
            $this->transactionId = $value;
        }
        return $this->transactionId;
    }

    /**
     * @param \DateTimeImmutable|\DateTime|string $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        if ($timestamp instanceof \DateTime) {
            $timestamp = \DateTimeImmutable::createFromMutable($timestamp);
        }
        if (!$timestamp instanceof \DateTimeImmutable) {
            $timestamp = new \DateTimeImmutable($timestamp);
        }
        $this->$timestamp = $timestamp;

        return $this;
    }
    /**
     * @param string $transactionId
     * @return $this
     */
    public function setTransactionId(string $transactionId)
    {
        $this->transactionId = (string)$transactionId;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP]) && $data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP] instanceof \DateTimeImmutable) {
            $data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP] = $data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
