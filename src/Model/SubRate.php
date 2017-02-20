<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class SubRate extends JsonObject {
    protected $name;
    protected $amount;

    /**
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                

    /**
     * @return float
     */
    public function getAmount(): float
    {
        if (is_null($this->amount)) {
            $value = $this->raw('amount');
            if (!is_null($value)) {
                $this->amount = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->amount;
    }
                
}
