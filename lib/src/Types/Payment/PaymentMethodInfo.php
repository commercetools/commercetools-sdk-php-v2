<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\LocalizedString;

interface PaymentMethodInfo extends JsonObject
{
    const FIELD_PAYMENT_INTERFACE = 'paymentInterface';
    const FIELD_METHOD = 'method';
    const FIELD_NAME = 'name';

    /**
     * @return string
     */
    public function getPaymentInterface();

    /**
     * @return string
     */
    public function getMethod();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @param string $paymentInterface
     * @return $this
     */
    public function setPaymentInterface(string $paymentInterface);

    /**
     * @param string $method
     * @return $this
     */
    public function setMethod(string $method);

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

}
