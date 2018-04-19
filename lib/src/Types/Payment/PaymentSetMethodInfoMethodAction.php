<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

interface PaymentSetMethodInfoMethodAction extends PaymentUpdateAction
{
    const FIELD_METHOD = 'method';

    /**
     * @return string
     */
    public function getMethod();

    /**
     * @param string $method
     * @return $this
     */
    public function setMethod(string $method);

}
