<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

interface PaymentChangeTransactionInteractionIdAction extends PaymentUpdateAction
{
    const FIELD_INTERACTION_ID = 'interactionId';
    const FIELD_TRANSACTION_ID = 'transactionId';

    /**
     * @return string
     */
    public function getInteractionId();

    /**
     * @return string
     */
    public function getTransactionId();

    /**
     * @param string $interactionId
     * @return $this
     */
    public function setInteractionId(string $interactionId);

    /**
     * @param string $transactionId
     * @return $this
     */
    public function setTransactionId(string $transactionId);

}
