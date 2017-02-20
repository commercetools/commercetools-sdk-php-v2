<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerChangePassword extends JsonObject {
    protected $id;
    protected $version;
    protected $currentPassword;
    protected $newPassword;

    /**
     * @return string
     */
    public function getId(): string
    {
        if (is_null($this->id)) {
            $value = $this->raw('id');
            if (!is_null($value)) {
                $this->id = (string)$value;
            } else {
                return '';
            }
        }
        return $this->id;
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
                

    /**
     * @return string
     */
    public function getCurrentPassword(): string
    {
        if (is_null($this->currentPassword)) {
            $value = $this->raw('currentPassword');
            if (!is_null($value)) {
                $this->currentPassword = (string)$value;
            } else {
                return '';
            }
        }
        return $this->currentPassword;
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
                
}
