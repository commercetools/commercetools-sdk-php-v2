<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;

interface OrderCustomerEmailSetMessagePayload extends MessagePayload
{
    
    const FIELD_EMAIL = 'email';
    const FIELD_OLD_EMAIL = 'oldEmail';

    /**
     *
     * @return string|null
     */
    public function getEmail();
    
    /**
     *
     * @return string|null
     */
    public function getOldEmail();
    public function setEmail(?string $email): void;
    
    public function setOldEmail(?string $oldEmail): void;
}