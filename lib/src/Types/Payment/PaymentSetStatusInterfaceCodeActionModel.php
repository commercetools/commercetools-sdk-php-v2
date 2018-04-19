<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Payment\PaymentUpdateActionModel;

class PaymentSetStatusInterfaceCodeActionModel extends PaymentUpdateActionModel implements PaymentSetStatusInterfaceCodeAction
{
    const DISCRIMINATOR_VALUE = 'setStatusInterfaceCode';

    /**
     * @var string
     */
    protected $interfaceCode;

    /**
     * @return string
     */
    public function getInterfaceCode()
    {
        if (is_null($this->interfaceCode)) {
            $value = $this->raw(PaymentSetStatusInterfaceCodeAction::FIELD_INTERFACE_CODE);
            $value = (string)$value;
            $this->interfaceCode = $value;
        }
        return $this->interfaceCode;
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
