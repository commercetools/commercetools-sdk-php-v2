<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class OutOfStockError extends ErrorObject {
    protected $lineItems;
    protected $skus;
    const DISCRIMINATOR_VALUE = 'OutOfStock';

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
     * @return array
     */
    public function getSkus(): array
    {
        if (is_null($this->skus)) {
            $value = $this->raw('skus');
            if (!is_null($value)) {
                $this->skus = $value;
            } else {
                return [];
            }
        }
        return $this->skus;
    }
                
}
