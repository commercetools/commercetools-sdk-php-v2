<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerEmailVerify extends JsonObject {
    protected $version;
    protected $tokenValue;

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
                
}
