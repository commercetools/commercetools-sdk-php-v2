<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductProjectionPagedSearchResponse extends PagedQueryResponse {
    protected $results;
    protected $facets;

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
                

    /**
     * @return FacetResults
     */
    public function getFacets(): FacetResults
    {
        if (is_null($this->facets)) {
            $value = $this->raw('facets');
            if (!is_null($value)) {
                $this->facets = Mapper::map($value, FacetResults::class);
            } else {
                return Mapper::map([], FacetResults::class);
            }
        }
        return $this->facets;
    }
                
}
