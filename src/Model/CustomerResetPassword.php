<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerResetPassword extends JsonObject {
    protected $tokenValue;
    protected $newPassword;
    protected $version;

    /**
     * @return string
     */
    public function getTokenValue(): string
    {
        if (is_null($this->tokenValue)) {
            $value = $this->raw('tokenValue');
            if (!is_null($value)) {
                $this->tokenValue = (string)$value;
            } else {
                return '';
            }
        }
        return $this->tokenValue;
    }
                

    /**
     * @return string
     */
    public function getNewPassword(): string
    {
        if (is_null($this->newPassword)) {
            $value = $this->raw('newPassword');
            if (!is_null($value)) {
                $this->newPassword = (string)$value;
            } else {
                return '';
            }
        }
        return $this->newPassword;
    }
                

    /**
     * @return int
     */
    public function getVersion(): int
    {
        if (is_null($this->version)) {
            $value = $this->raw('version');
            if (!is_null($value)) {
                $this->version = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->version;
    }
                
}
