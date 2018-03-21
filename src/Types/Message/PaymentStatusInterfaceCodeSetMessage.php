<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

interface PaymentStatusInterfaceCodeSetMessage extends Message {
    const FIELD_PAYMENT_ID = 'paymentId';
    const FIELD_INTERFACE_CODE = 'interfaceCode';

    /**
     * @return string
     */
    public function getPaymentId();

    /**
     * @return string
     */
    public function getInterfaceCode();

    /**
     * @param string $paymentId
     * @return $this
     */
    public function setPaymentId(string $paymentId);

    /**
     * @param string $interfaceCode
     * @return $this
     */
    public function setInterfaceCode(string $interfaceCode);

}
