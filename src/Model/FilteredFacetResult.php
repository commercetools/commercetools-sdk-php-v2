<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class FilteredFacetResult extends FacetResult {
    protected $count;
    protected $productCount;
    const DISCRIMINATOR_VALUE = 'filter';

    /**
     * @return int
     */
    public function getCount(): int
    {
        if (is_null($this->count)) {
            $value = $this->raw('count');
            if (!is_null($value)) {
                $this->count = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->count;
    }
                

    /**
     * @return int
     */
    public function getProductCount(): int
    {
        if (is_null($this->productCount)) {
            $value = $this->raw('productCount');
            if (!is_null($value)) {
                $this->productCount = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->productCount;
    }
                
}
