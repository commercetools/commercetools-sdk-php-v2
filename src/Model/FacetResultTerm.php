<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class FacetResultTerm extends JsonObject {
    protected $term;
    protected $count;
    protected $productCount;

    /**
     * @return array
     */
    public function getTerm(): array
    {
        if (is_null($this->term)) {
            $value = $this->raw('term');
            if (!is_null($value)) {
                $this->term = $value;
            } else {
                return [];
            }
        }
        return $this->term;
    }
                

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
