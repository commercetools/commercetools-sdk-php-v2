<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageModel;

class PaymentStatusInterfaceCodeSetMessageModel extends MessageModel implements PaymentStatusInterfaceCodeSetMessage {
    const DISCRIMINATOR_VALUE = 'PaymentStatusInterfaceCodeSet';

    /**
     * @var string
     */
    protected $paymentId;
    /**
     * @var string
     */
    protected $interfaceCode;

    /**
     * @return string
     */
    public function getPaymentId()
    {
        if (is_null($this->paymentId)) {
            $value = $this->raw(PaymentStatusInterfaceCodeSetMessage::FIELD_PAYMENT_ID);
            $value = (string)$value;
            $this->paymentId = $value;
        }
        return $this->paymentId;
    }
    /**
     * @return string
     */
    public function getInterfaceCode()
    {
        if (is_null($this->interfaceCode)) {
            $value = $this->raw(PaymentStatusInterfaceCodeSetMessage::FIELD_INTERFACE_CODE);
            $value = (string)$value;
            $this->interfaceCode = $value;
        }
        return $this->interfaceCode;
    }

    /**
     * @param string $paymentId
     * @return $this
     */
    public function setPaymentId(string $paymentId)
    {
        $this->paymentId = (string)$paymentId;

        return $this;
    }
    /**
     * @param string $interfaceCode
     * @return $this
     */
    public function setInterfaceCode(string $interfaceCode)
    {
        $this->interfaceCode = (string)$interfaceCode;

        return $this;
    }

}
