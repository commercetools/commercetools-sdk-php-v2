<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

interface ProductProjectionPagedSearchResponse extends PagedQueryResponse
{
    const FIELD_FACETS = 'facets';

    /**
     * @return ProductProjectionCollection
     */
    public function getResults();

    /**
     * @return FacetResults
     */
    public function getFacets();

    /**
     * @param ProductProjectionCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results);

    /**
     * @param FacetResults $facets
     * @return $this
     */
    public function setFacets(FacetResults $facets);

}
