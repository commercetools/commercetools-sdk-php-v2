<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionModel;

class PaymentSetStatusInterfaceTextActionModel extends PaymentUpdateActionModel implements PaymentSetStatusInterfaceTextAction {
    const DISCRIMINATOR_VALUE = 'setStatusInterfaceText';

    /**
     * @var string
     */
    protected $interfaceText;

    /**
     * @return string
     */
    public function getInterfaceText()
    {
        if (is_null($this->interfaceText)) {
            $value = $this->raw(PaymentSetStatusInterfaceTextAction::FIELD_INTERFACE_TEXT);
            $value = (string)$value;
            $this->interfaceText = $value;
        }
        return $this->interfaceText;
    }

    /**
     * @param string $interfaceText
     * @return $this
     */
    public function setInterfaceText(string $interfaceText)
    {
        $this->interfaceText = (string)$interfaceText;

        return $this;
    }

}
