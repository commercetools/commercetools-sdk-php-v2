<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSignin extends JsonObject
{
    const FIELD_EMAIL = 'email';
    const FIELD_PASSWORD = 'password';
    const FIELD_ANONYMOUS_CART_ID = 'anonymousCartId';
    const FIELD_ANONYMOUS_CART_SIGN_IN_MODE = 'anonymousCartSignInMode';
    const FIELD_ANONYMOUS_ID = 'anonymousId';

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @return string
     */
    public function getAnonymousCartId();

    /**
     * @return string
     */
    public function getAnonymousCartSignInMode();

    /**
     * @return string
     */
    public function getAnonymousId();

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email);

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password);

    /**
     * @param string $anonymousCartId
     * @return $this
     */
    public function setAnonymousCartId(string $anonymousCartId);

    /**
     * @param string $anonymousCartSignInMode
     * @return $this
     */
    public function setAnonymousCartSignInMode(string $anonymousCartSignInMode);

    /**
     * @param string $anonymousId
     * @return $this
     */
    public function setAnonymousId(string $anonymousId);

}
