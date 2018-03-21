<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonObject;

interface CustomerEmailVerify extends JsonObject {
    const FIELD_VERSION = 'version';
    const FIELD_TOKEN_VALUE = 'tokenValue';

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @return string
     */
    public function getTokenValue();

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

    /**
     * @param string $tokenValue
     * @return $this
     */
    public function setTokenValue(string $tokenValue);

}
