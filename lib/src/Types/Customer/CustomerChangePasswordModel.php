<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class CustomerChangePasswordModel extends JsonObjectModel implements CustomerChangePassword
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var int
     */
    protected $version;
    /**
     * @var string
     */
    protected $currentPassword;
    /**
     * @var string
     */
    protected $newPassword;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(CustomerChangePassword::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            $value = $this->raw(CustomerChangePassword::FIELD_VERSION);
            $value = (int)$value;
            $this->version = $value;
        }
        return $this->version;
    }
    /**
     * @return string
     */
    public function getCurrentPassword()
    {
        if (is_null($this->currentPassword)) {
            $value = $this->raw(CustomerChangePassword::FIELD_CURRENT_PASSWORD);
            $value = (string)$value;
            $this->currentPassword = $value;
        }
        return $this->currentPassword;
    }
    /**
     * @return string
     */
    public function getNewPassword()
    {
        if (is_null($this->newPassword)) {
            $value = $this->raw(CustomerChangePassword::FIELD_NEW_PASSWORD);
            $value = (string)$value;
            $this->newPassword = $value;
        }
        return $this->newPassword;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

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
    /**
     * @param string $currentPassword
     * @return $this
     */
    public function setCurrentPassword(string $currentPassword)
    {
        $this->currentPassword = (string)$currentPassword;

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

}
