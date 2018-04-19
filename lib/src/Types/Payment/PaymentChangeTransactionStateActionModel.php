<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Payment\PaymentUpdateActionModel;

class PaymentChangeTransactionStateActionModel extends PaymentUpdateActionModel implements PaymentChangeTransactionStateAction
{
    const DISCRIMINATOR_VALUE = 'changeTransactionState';

    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $transactionId;

    /**
     * @return string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(PaymentChangeTransactionStateAction::FIELD_STATE);
            $value = (string)$value;
            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return string
     */
    public function getTransactionId()
    {
        if (is_null($this->transactionId)) {
            $value = $this->raw(PaymentChangeTransactionStateAction::FIELD_TRANSACTION_ID);
            $value = (string)$value;
            $this->transactionId = $value;
        }
        return $this->transactionId;
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
    /**
     * @param string $transactionId
     * @return $this
     */
    public function setTransactionId(string $transactionId)
    {
        $this->transactionId = (string)$transactionId;

        return $this;
    }

}
