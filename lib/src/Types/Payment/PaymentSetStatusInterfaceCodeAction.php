<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

interface PaymentSetStatusInterfaceCodeAction extends PaymentUpdateAction
{
    const FIELD_INTERFACE_CODE = 'interfaceCode';

    /**
     * @return string
     */
    public function getInterfaceCode();

    /**
     * @param string $interfaceCode
     * @return $this
     */
    public function setInterfaceCode(string $interfaceCode);

}
