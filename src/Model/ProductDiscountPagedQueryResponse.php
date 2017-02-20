<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountPagedQueryResponse extends PagedQueryResponse {
    protected $results;

    /**
     * @return ProductDiscountCollection
     */
    public function getResults(): ProductDiscountCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, ProductDiscountCollection::class);
            } else {
                return Mapper::map([], ProductDiscountCollection::class);
            }
        }
        return $this->results;
    }
                
}
