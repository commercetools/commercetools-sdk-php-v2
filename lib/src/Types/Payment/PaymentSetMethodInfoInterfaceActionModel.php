<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Payment\PaymentUpdateActionModel;

class PaymentSetMethodInfoInterfaceActionModel extends PaymentUpdateActionModel implements PaymentSetMethodInfoInterfaceAction {
    const DISCRIMINATOR_VALUE = 'setMethodInfoInterface';

    /**
     * @var string
     */
    protected $interface;

    /**
     * @return string
     */
    public function getInterface()
    {
        if (is_null($this->interface)) {
            $value = $this->raw(PaymentSetMethodInfoInterfaceAction::FIELD_INTERFACE);
            $value = (string)$value;
            $this->interface = $value;
        }
        return $this->interface;
    }

    /**
     * @param string $interface
     * @return $this
     */
    public function setInterface(string $interface)
    {
        $this->interface = (string)$interface;

        return $this;
    }

}
