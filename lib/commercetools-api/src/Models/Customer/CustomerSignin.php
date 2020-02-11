<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomerSignin extends JsonObject
{

    public const FIELD_EMAIL = 'email';
    public const FIELD_PASSWORD = 'password';
    public const FIELD_ANONYMOUS_CART_ID = 'anonymousCartId';
    public const FIELD_ANONYMOUS_CART_SIGN_IN_MODE = 'anonymousCartSignInMode';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_UPDATE_PRODUCT_DATA = 'updateProductData';

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
