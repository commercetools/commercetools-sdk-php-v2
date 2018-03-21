<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonObjectModel;

class CustomerEmailVerifyModel extends JsonObjectModel implements CustomerEmailVerify {
    /**
     * @var int
     */
    protected $version;
    /**
     * @var string
     */
    protected $tokenValue;

    /**
     * @return int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            $value = $this->raw(CustomerEmailVerify::FIELD_VERSION);
            $value = (int)$value;
            $this->version = $value;
        }
        return $this->version;
    }
    /**
     * @return string
     */
    public function getTokenValue()
    {
        if (is_null($this->tokenValue)) {
            $value = $this->raw(CustomerEmailVerify::FIELD_TOKEN_VALUE);
            $value = (string)$value;
            $this->tokenValue = $value;
        }
        return $this->tokenValue;
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
     * @param string $tokenValue
     * @return $this
     */
    public function setTokenValue(string $tokenValue)
    {
        $this->tokenValue = (string)$tokenValue;

        return $this;
    }

}
