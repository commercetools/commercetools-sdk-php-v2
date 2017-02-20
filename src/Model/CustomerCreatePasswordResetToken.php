<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerCreatePasswordResetToken extends JsonObject {
    protected $email;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        if (is_null($this->email)) {
            $value = $this->raw('email');
            if (!is_null($value)) {
                $this->email = (string)$value;
            } else {
                return '';
            }
        }
        return $this->email;
    }
                
}
