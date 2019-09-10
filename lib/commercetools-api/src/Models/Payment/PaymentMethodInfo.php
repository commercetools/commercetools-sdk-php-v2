<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface PaymentMethodInfo extends JsonObject
{
    
    const FIELD_PAYMENT_INTERFACE = 'paymentInterface';
    const FIELD_METHOD = 'method';
    const FIELD_NAME = 'name';

    /**
     *
     * @return string|null
     */
    public function getPaymentInterface();
    
    /**
     *
     * @return string|null
     */
    public function getMethod();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    public function setPaymentInterface(?string $paymentInterface): void;
    
    public function setMethod(?string $method): void;
    
    public function setName(?LocalizedString $name): void;
}