<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

interface PaymentSetStatusInterfaceTextAction extends PaymentUpdateAction {
    const FIELD_INTERFACE_TEXT = 'interfaceText';

    /**
     * @return string
     */
    public function getInterfaceText();

    /**
     * @param string $interfaceText
     * @return $this
     */
    public function setInterfaceText(string $interfaceText);

}
