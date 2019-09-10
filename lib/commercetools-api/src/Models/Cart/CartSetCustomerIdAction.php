<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartSetCustomerIdAction extends CartUpdateAction
{
    
    const FIELD_CUSTOMER_ID = 'customerId';

    /**
     *
     * @return string|null
     */
    public function getCustomerId();
    public function setCustomerId(?string $customerId): void;
}