<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class PriceChangedError extends ErrorObject {
    protected $lineItems;
    protected $shipping;
    const DISCRIMINATOR_VALUE = 'PriceChanged';

    /**
     * @return array
     */
    public function getLineItems(): array
    {
        if (is_null($this->lineItems)) {
            $value = $this->raw('lineItems');
            if (!is_null($value)) {
                $this->lineItems = $value;
            } else {
                return [];
            }
        }
        return $this->lineItems;
    }
                

    /**
     * @return bool
     */
    public function getShipping(): bool
    {
        if (is_null($this->shipping)) {
            $value = $this->raw('shipping');
            if (!is_null($value)) {
                $this->shipping = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->shipping;
    }
                
}
