<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Payment\PaymentUpdateActionModel;

class PaymentChangeTransactionInteractionIdActionModel extends PaymentUpdateActionModel implements PaymentChangeTransactionInteractionIdAction
{
    const DISCRIMINATOR_VALUE = 'changeTransactionInteractionId';

    /**
     * @var string
     */
    protected $interactionId;
    /**
     * @var string
     */
    protected $transactionId;

    /**
     * @return string
     */
    public function getInteractionId()
    {
        if (is_null($this->interactionId)) {
            $value = $this->raw(PaymentChangeTransactionInteractionIdAction::FIELD_INTERACTION_ID);
            $value = (string)$value;
            $this->interactionId = $value;
        }
        return $this->interactionId;
    }
    /**
     * @return string
     */
    public function getTransactionId()
    {
        if (is_null($this->transactionId)) {
            $value = $this->raw(PaymentChangeTransactionInteractionIdAction::FIELD_TRANSACTION_ID);
            $value = (string)$value;
            $this->transactionId = $value;
        }
        return $this->transactionId;
    }

    /**
     * @param string $interactionId
     * @return $this
     */
    public function setInteractionId(string $interactionId)
    {
        $this->interactionId = (string)$interactionId;

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
