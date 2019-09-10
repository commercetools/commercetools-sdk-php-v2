<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductProjectionPagedSearchResponse extends JsonObject
{
    
    const FIELD_COUNT = 'count';
    const FIELD_TOTAL = 'total';
    const FIELD_OFFSET = 'offset';
    const FIELD_RESULTS = 'results';
    const FIELD_FACETS = 'facets';

    /**
     *
     * @return int|null
     */
    public function getCount();
    
    /**
     *
     * @return int|null
     */
    public function getTotal();
    
    /**
     *
     * @return int|null
     */
    public function getOffset();
    
    /**
     *
     * @return ProductProjectionCollection|null
     */
    public function getResults();
    
    /**
     *
     * @return FacetResults|null
     */
    public function getFacets();
    public function setCount(?int $count): void;
    
    public function setTotal(?int $total): void;
    
    public function setOffset(?int $offset): void;
    
    public function setResults(?ProductProjectionCollection $results): void;
    
    public function setFacets(?FacetResults $facets): void;
}