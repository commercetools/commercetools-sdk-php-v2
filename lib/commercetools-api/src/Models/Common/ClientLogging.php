<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Customer\CustomerReference;

interface ClientLogging extends JsonObject
{
    
    const FIELD_CLIENT_ID = 'clientId';
    const FIELD_EXTERNAL_USER_ID = 'externalUserId';
    const FIELD_CUSTOMER = 'customer';
    const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     *
     * @return string|null
     */
    public function getClientId();
    
    /**
     *
     * @return string|null
     */
    public function getExternalUserId();
    
    /**
     *
     * @return CustomerReference|null
     */
    public function getCustomer();
    
    /**
     *
     * @return string|null
     */
    public function getAnonymousId();
    public function setClientId(?string $clientId): void;
    
    public function setExternalUserId(?string $externalUserId): void;
    
    public function setCustomer(?CustomerReference $customer): void;
    
    public function setAnonymousId(?string $anonymousId): void;
}