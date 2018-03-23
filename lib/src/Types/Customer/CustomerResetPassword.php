<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonObject;

interface CustomerResetPassword extends JsonObject {
    const FIELD_TOKEN_VALUE = 'tokenValue';
    const FIELD_NEW_PASSWORD = 'newPassword';
    const FIELD_VERSION = 'version';

    /**
     * @return string
     */
    public function getTokenValue();

    /**
     * @return string
     */
    public function getNewPassword();

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @param string $tokenValue
     * @return $this
     */
    public function setTokenValue(string $tokenValue);

    /**
     * @param string $newPassword
     * @return $this
     */
    public function setNewPassword(string $newPassword);

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

}
