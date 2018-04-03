<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class CustomerSigninModel extends JsonObjectModel implements CustomerSignin {
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $anonymousCartId;
    /**
     * @var string
     */
    protected $anonymousCartSignInMode;
    /**
     * @var string
     */
    protected $anonymousId;

    /**
     * @return string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            $value = $this->raw(CustomerSignin::FIELD_EMAIL);
            $value = (string)$value;
            $this->email = $value;
        }
        return $this->email;
    }
    /**
     * @return string
     */
    public function getPassword()
    {
        if (is_null($this->password)) {
            $value = $this->raw(CustomerSignin::FIELD_PASSWORD);
            $value = (string)$value;
            $this->password = $value;
        }
        return $this->password;
    }
    /**
     * @return string
     */
    public function getAnonymousCartId()
    {
        if (is_null($this->anonymousCartId)) {
            $value = $this->raw(CustomerSignin::FIELD_ANONYMOUS_CART_ID);
            $value = (string)$value;
            $this->anonymousCartId = $value;
        }
        return $this->anonymousCartId;
    }
    /**
     * @return string
     */
    public function getAnonymousCartSignInMode()
    {
        if (is_null($this->anonymousCartSignInMode)) {
            $value = $this->raw(CustomerSignin::FIELD_ANONYMOUS_CART_SIGN_IN_MODE);
            $value = (string)$value;
            $this->anonymousCartSignInMode = $value;
        }
        return $this->anonymousCartSignInMode;
    }
    /**
     * @return string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            $value = $this->raw(CustomerSignin::FIELD_ANONYMOUS_ID);
            $value = (string)$value;
            $this->anonymousId = $value;
        }
        return $this->anonymousId;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = (string)$email;

        return $this;
    }
    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password)
    {
        $this->password = (string)$password;

        return $this;
    }
    /**
     * @param string $anonymousCartId
     * @return $this
     */
    public function setAnonymousCartId(string $anonymousCartId)
    {
        $this->anonymousCartId = (string)$anonymousCartId;

        return $this;
    }
    /**
     * @param string $anonymousCartSignInMode
     * @return $this
     */
    public function setAnonymousCartSignInMode(string $anonymousCartSignInMode)
    {
        $this->anonymousCartSignInMode = (string)$anonymousCartSignInMode;

        return $this;
    }
    /**
     * @param string $anonymousId
     * @return $this
     */
    public function setAnonymousId(string $anonymousId)
    {
        $this->anonymousId = (string)$anonymousId;

        return $this;
    }

}
