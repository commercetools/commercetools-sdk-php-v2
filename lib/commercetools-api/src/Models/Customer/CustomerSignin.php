<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSignin extends JsonObject
{
    public const FIELD_EMAIL = 'email';
    public const FIELD_PASSWORD = 'password';
    public const FIELD_ANONYMOUS_CART_ID = 'anonymousCartId';
    public const FIELD_ANONYMOUS_CART = 'anonymousCart';
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
     * @return null|CartResourceIdentifier
     */
    public function getAnonymousCart();

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

    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void;

    /**
     * @param ?string $password
     */
    public function setPassword(?string $password): void;

    /**
     * @param ?string $anonymousCartId
     */
    public function setAnonymousCartId(?string $anonymousCartId): void;

    /**
     * @param ?CartResourceIdentifier $anonymousCart
     */
    public function setAnonymousCart(?CartResourceIdentifier $anonymousCart): void;

    /**
     * @param ?string $anonymousCartSignInMode
     */
    public function setAnonymousCartSignInMode(?string $anonymousCartSignInMode): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?bool $updateProductData
     */
    public function setUpdateProductData(?bool $updateProductData): void;
}
