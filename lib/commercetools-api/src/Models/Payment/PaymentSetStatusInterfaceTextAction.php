<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;

interface PaymentSetStatusInterfaceTextAction extends PaymentUpdateAction
{
    
    const FIELD_INTERFACE_TEXT = 'interfaceText';

    /**
     *
     * @return string|null
     */
    public function getInterfaceText();
    public function setInterfaceText(?string $interfaceText): void;
}