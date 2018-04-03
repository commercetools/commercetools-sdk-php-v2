<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class CustomerResetPasswordModel extends JsonObjectModel implements CustomerResetPassword {
    /**
     * @var string
     */
    protected $tokenValue;
    /**
     * @var string
     */
    protected $newPassword;
    /**
     * @var int
     */
    protected $version;

    /**
     * @return string
     */
    public function getTokenValue()
    {
        if (is_null($this->tokenValue)) {
            $value = $this->raw(CustomerResetPassword::FIELD_TOKEN_VALUE);
            $value = (string)$value;
            $this->tokenValue = $value;
        }
        return $this->tokenValue;
    }
    /**
     * @return string
     */
    public function getNewPassword()
    {
        if (is_null($this->newPassword)) {
            $value = $this->raw(CustomerResetPassword::FIELD_NEW_PASSWORD);
            $value = (string)$value;
            $this->newPassword = $value;
        }
        return $this->newPassword;
    }
    /**
     * @return int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            $value = $this->raw(CustomerResetPassword::FIELD_VERSION);
            $value = (int)$value;
            $this->version = $value;
        }
        return $this->version;
    }

    /**
     * @param string $tokenValue
     * @return $this
     */
    public function setTokenValue(string $tokenValue)
    {
        $this->tokenValue = (string)$tokenValue;

        return $this;
    }
    /**
     * @param string $newPassword
     * @return $this
     */
    public function setNewPassword(string $newPassword)
    {
        $this->newPassword = (string)$newPassword;

        return $this;
    }
    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version)
    {
        $this->version = (int)$version;

        return $this;
    }

}
