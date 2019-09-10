<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSignin extends JsonObject
{
    
    const FIELD_EMAIL = 'email';
    const FIELD_PASSWORD = 'password';
    const FIELD_ANONYMOUS_CART_ID = 'anonymousCartId';
    const FIELD_ANONYMOUS_CART_SIGN_IN_MODE = 'anonymousCartSignInMode';
    const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     *
     * @return string|null
     */
    public function getEmail();
    
    /**
     *
     * @return string|null
     */
    public function getPassword();
    
    /**
     *
     * @return string|null
     */
    public function getAnonymousCartId();
    
    /**
     *
     * @return string|null
     */
    public function getAnonymousCartSignInMode();
    
    /**
     *
     * @return string|null
     */
    public function getAnonymousId();
    public function setEmail(?string $email): void;
    
    public function setPassword(?string $password): void;
    
    public function setAnonymousCartId(?string $anonymousCartId): void;
    
    public function setAnonymousCartSignInMode(?string $anonymousCartSignInMode): void;
    
    public function setAnonymousId(?string $anonymousId): void;
}