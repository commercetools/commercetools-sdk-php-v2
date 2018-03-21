<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

interface PaymentSetInterfaceIdAction extends PaymentUpdateAction {
    const FIELD_INTERFACE_ID = 'interfaceId';

    /**
     * @return string
     */
    public function getInterfaceId();

    /**
     * @param string $interfaceId
     * @return $this
     */
    public function setInterfaceId(string $interfaceId);

}
