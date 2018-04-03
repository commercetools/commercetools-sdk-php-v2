<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Payment\Payment;

class PaymentCreatedMessageModel extends MessageModel implements PaymentCreatedMessage {
    const DISCRIMINATOR_VALUE = 'PaymentCreated';

    /**
     * @var Payment
     */
    protected $payment;

    /**
     * @return Payment
     */
    public function getPayment()
    {
        if (is_null($this->payment)) {
            $value = $this->raw(PaymentCreatedMessage::FIELD_PAYMENT);
            if (is_null($value)) {
                return $this->mapData(Payment::class, null);
            }
            $value = $this->mapData(Payment::class, $value);

            $this->payment = $value;
        }
        return $this->payment;
    }

    /**
     * @param Payment $payment
     * @return $this
     */
    public function setPayment(Payment $payment)
    {
        $this->payment = $payment;

        return $this;
    }

}
