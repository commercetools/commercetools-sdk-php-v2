<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

interface PaymentSetMethodInfoInterfaceAction extends PaymentUpdateAction
{
    const FIELD_INTERFACE = 'interface';

    /**
     * @return string
     */
    public function getInterface();

    /**
     * @param string $interface
     * @return $this
     */
    public function setInterface(string $interface);

}
