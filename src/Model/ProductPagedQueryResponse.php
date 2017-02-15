<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductPagedQueryResponse extends PagedQueryResponse {
    protected $results;

    /**
     * @return ProductCollection
     */
    public function getResults(): ProductCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, ProductCollection::class);
            } else {
                return Mapper::map([], ProductCollection::class);
            }
        }
        return $this->results;
    }
                
}
