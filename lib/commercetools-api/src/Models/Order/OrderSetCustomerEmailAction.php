<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;

interface OrderSetCustomerEmailAction extends OrderUpdateAction
{
    
    const FIELD_EMAIL = 'email';

    /**
     *
     * @return string|null
     */
    public function getEmail();
    public function setEmail(?string $email): void;
}