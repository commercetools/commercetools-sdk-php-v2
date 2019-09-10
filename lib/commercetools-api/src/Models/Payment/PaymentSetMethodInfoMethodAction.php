<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;

interface PaymentSetMethodInfoMethodAction extends PaymentUpdateAction
{
    
    const FIELD_METHOD = 'method';

    /**
     *
     * @return string|null
     */
    public function getMethod();
    public function setMethod(?string $method): void;
}