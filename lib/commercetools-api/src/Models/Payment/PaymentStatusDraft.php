<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\State\StateResourceIdentifier;

interface PaymentStatusDraft extends JsonObject
{
    
    const FIELD_INTERFACE_CODE = 'interfaceCode';
    const FIELD_INTERFACE_TEXT = 'interfaceText';
    const FIELD_STATE = 'state';

    /**
     *
     * @return string|null
     */
    public function getInterfaceCode();
    
    /**
     *
     * @return string|null
     */
    public function getInterfaceText();
    
    /**
     *
     * @return StateResourceIdentifier|null
     */
    public function getState();
    public function setInterfaceCode(?string $interfaceCode): void;
    
    public function setInterfaceText(?string $interfaceText): void;
    
    public function setState(?StateResourceIdentifier $state): void;
}