<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerCreatePasswordResetToken extends JsonObject
{
    
    const FIELD_EMAIL = 'email';
    const FIELD_TTL_MINUTES = 'ttlMinutes';

    /**
     *
     * @return string|null
     */
    public function getEmail();
    
    /**
     *
     * @return int|null
     */
    public function getTtlMinutes();
    public function setEmail(?string $email): void;
    
    public function setTtlMinutes(?int $ttlMinutes): void;
}