<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
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
    const FIELD_UPDATE_PRODUCT_DATA = 'updateProductData';

    /**
     * @return null|string
     */
    public function getEmail();

    /**
     * @return null|string
     */
    public function getPassword();

    /**
     * @return null|string
     */
    public function getAnonymousCartId();

    /**
     * @return null|string
     */
    public function getAnonymousCartSignInMode();

    /**
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @return null|bool
     */
    public function getUpdateProductData();

    public function setEmail(?string $email): void;

    public function setPassword(?string $password): void;

    public function setAnonymousCartId(?string $anonymousCartId): void;

    public function setAnonymousCartSignInMode(?string $anonymousCartSignInMode): void;

    public function setAnonymousId(?string $anonymousId): void;

    public function setUpdateProductData(?bool $updateProductData): void;
}
