<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageModel;

class PaymentTransactionStateChangedMessageModel extends MessageModel implements PaymentTransactionStateChangedMessage {
    const DISCRIMINATOR_VALUE = 'PaymentTransactionStateChanged';

    /**
     * @var string
     */
    protected $transactionId;
    /**
     * @var string
     */
    protected $state;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        if (is_null($this->transactionId)) {
            $value = $this->raw(PaymentTransactionStateChangedMessage::FIELD_TRANSACTION_ID);
            $value = (string)$value;
            $this->transactionId = $value;
        }
        return $this->transactionId;
    }
    /**
     * @return string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(PaymentTransactionStateChangedMessage::FIELD_STATE);
            $value = (string)$value;
            $this->state = $value;
        }
        return $this->state;
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
    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state)
    {
        $this->state = (string)$state;

        return $this;
    }

}
