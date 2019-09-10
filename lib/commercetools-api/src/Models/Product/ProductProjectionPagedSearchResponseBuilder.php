<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductProjectionPagedSearchResponse>
 */
final class ProductProjectionPagedSearchResponseBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $total;
    
    /**
     * @var ?int
     */
    protected $offset;
    
    /**
     * @var ?int
     */
    protected $count;
    
    /**
     * @var ?ProductProjectionCollection
     */
    protected $results;
    
    /**
     * @var ?FacetResultsBuilder|FacetResults
     */
    protected $facets;

    /**
     *
     * @return int|null
     */
    final public function getTotal()
    {
       return $this->total;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getOffset()
    {
       return $this->offset;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getCount()
    {
       return $this->count;
    }
    
    /**
     *
     * @return ProductProjectionCollection|null
     */
    final public function getResults()
    {
       return $this->results;
    }
    
    /**
     *
     * @return FacetResults|null
     */
    final public function getFacets()
    {
       return ($this->facets instanceof FacetResultsBuilder ? $this->facets->build() : $this->facets);
    }
    /**
     * @return $this
     */
    final public function withTotal(?int $total)
    {
        $this->total = $total;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOffset(?int $offset)
    {
        $this->offset = $offset;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCount(?int $count)
    {
        $this->count = $count;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withResults(?ProductProjectionCollection $results)
    {
        $this->results = $results;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFacets(?FacetResults $facets)
    {
        $this->facets = $facets;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withFacetsBuilder(?FacetResultsBuilder $facets)
    {
        $this->facets = $facets;
        
        return $this;
    }
    
    public function build(): ProductProjectionPagedSearchResponse {
        return new ProductProjectionPagedSearchResponseModel(
            $this->total,
            $this->offset,
            $this->count,
            $this->results,
            ($this->facets instanceof FacetResultsBuilder ? $this->facets->build() : $this->facets)
        );
    }
    
    public static function of(): ProductProjectionPagedSearchResponseBuilder
    {
        return new self();
    }
}