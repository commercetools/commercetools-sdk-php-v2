<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonObject;

interface CustomerChangePassword extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_CURRENT_PASSWORD = 'currentPassword';
    const FIELD_NEW_PASSWORD = 'newPassword';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @return string
     */
    public function getCurrentPassword();

    /**
     * @return string
     */
    public function getNewPassword();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

    /**
     * @param string $currentPassword
     * @return $this
     */
    public function setCurrentPassword(string $currentPassword);

    /**
     * @param string $newPassword
     * @return $this
     */
    public function setNewPassword(string $newPassword);

}
