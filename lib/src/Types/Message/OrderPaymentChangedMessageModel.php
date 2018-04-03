<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

class OrderPaymentChangedMessageModel extends MessageModel implements OrderPaymentChangedMessage {
    const DISCRIMINATOR_VALUE = 'OrderPaymentStateChanged';

    /**
     * @var string
     */
    protected $paymentState;

    /**
     * @return string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            $value = $this->raw(OrderPaymentChangedMessage::FIELD_PAYMENT_STATE);
            $value = (string)$value;
            $this->paymentState = $value;
        }
        return $this->paymentState;
    }

    /**
     * @param string $paymentState
     * @return $this
     */
    public function setPaymentState(string $paymentState)
    {
        $this->paymentState = (string)$paymentState;

        return $this;
    }

}
