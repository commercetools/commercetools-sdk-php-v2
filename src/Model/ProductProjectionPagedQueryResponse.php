<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductProjectionPagedQueryResponse extends PagedQueryResponse {
    protected $results;

    /**
     * @return ProductProjectionCollection
     */
    public function getResults(): ProductProjectionCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, ProductProjectionCollection::class);
            } else {
                return Mapper::map([], ProductProjectionCollection::class);
            }
        }
        return $this->results;
    }
                
}
