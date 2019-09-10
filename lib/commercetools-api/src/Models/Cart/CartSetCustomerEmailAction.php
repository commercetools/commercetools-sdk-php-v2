<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartSetCustomerEmailAction extends CartUpdateAction
{
    
    const FIELD_EMAIL = 'email';

    /**
     *
     * @return string|null
     */
    public function getEmail();
    public function setEmail(?string $email): void;
}