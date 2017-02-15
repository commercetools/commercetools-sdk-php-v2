<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Money extends JsonObject {
    protected $centAmount;
    protected $currencyCode;

    /**
     * @return int
     */
    public function getCentAmount(): int
    {
        if (is_null($this->centAmount)) {
            $value = $this->raw('centAmount');
            if (!is_null($value)) {
                $this->centAmount = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->centAmount;
    }
                

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        if (is_null($this->currencyCode)) {
            $value = $this->raw('currencyCode');
            if (!is_null($value)) {
                $this->currencyCode = (string)$value;
            } else {
                return '';
            }
        }
        return $this->currencyCode;
    }
                
}
