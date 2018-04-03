<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class ProductProjectionPagedSearchResponseModel extends PagedQueryResponseModel implements ProductProjectionPagedSearchResponse {
    /**
     * @var ProductProjectionCollection
     */
    protected $results;
    /**
     * @var FacetResults
     */
    protected $facets;

    /**
     * @return ProductProjectionCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(ProductProjectionPagedSearchResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ProductProjectionCollection::class, null);
            }
            $value = $this->mapData(ProductProjectionCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }
    /**
     * @return FacetResults
     */
    public function getFacets()
    {
        if (is_null($this->facets)) {
            $value = $this->raw(ProductProjectionPagedSearchResponse::FIELD_FACETS);
            if (is_null($value)) {
                return $this->mapData(FacetResults::class, null);
            }
            $value = $this->mapData(FacetResults::class, $value);

            $this->facets = $value;
        }
        return $this->facets;
    }

    /**
     * @param ProductProjectionCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        if (!$results instanceof ProductProjectionCollection) {
            throw new InvalidArgumentException();
        }
        $this->results = $results;

        return $this;
    }
    /**
     * @param FacetResults $facets
     * @return $this
     */
    public function setFacets(FacetResults $facets)
    {
        $this->facets = $facets;

        return $this;
    }

}
