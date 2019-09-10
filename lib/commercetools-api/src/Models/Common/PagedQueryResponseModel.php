<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Product\FacetResults;
use Commercetools\Api\Models\Product\FacetResultsModel;

final class PagedQueryResponseModel extends JsonObjectModel implements PagedQueryResponse
{
    
    public function __construct(
        int $total = null,
        int $offset = null,
        JsonObject $meta = null,
        int $count = null,
        BaseResourceCollection $results = null,
        FacetResults $facets = null
    ) {
        $this->total = $total;
        $this->offset = $offset;
        $this->meta = $meta;
        $this->count = $count;
        $this->results = $results;
        $this->facets = $facets;
        
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
     * @var ?JsonObject
     */
    protected $meta;
    
    /**
     * @var ?int
     */
    protected $count;
    
    /**
     * @var ?BaseResourceCollection
     */
    protected $results;
    
    /**
     * @var ?FacetResults
     */
    protected $facets;

    /**
     *
     * @return int|null
     */
    final public function getTotal()
    {
       if (is_null($this->total)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(PagedQueryResponse::FIELD_TOTAL);
           if (is_null($data)) {
               return null;
           }
           $this->total = (int)$data;
       }
       return $this->total;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getOffset()
    {
       if (is_null($this->offset)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(PagedQueryResponse::FIELD_OFFSET);
           if (is_null($data)) {
               return null;
           }
           $this->offset = (int)$data;
       }
       return $this->offset;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getMeta()
    {
       if (is_null($this->meta)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(PagedQueryResponse::FIELD_META);
           if (is_null($data)) {
               return null;
           }
           $this->meta = JsonObjectModel::of($data);
       }
       return $this->meta;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getCount()
    {
       if (is_null($this->count)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(PagedQueryResponse::FIELD_COUNT);
           if (is_null($data)) {
               return null;
           }
           $this->count = (int)$data;
       }
       return $this->count;
    }
    
    /**
     *
     * @return BaseResourceCollection|null
     */
    final public function getResults()
    {
       if (is_null($this->results)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(PagedQueryResponse::FIELD_RESULTS);
           if (is_null($data)) {
               return null;
           }
           $this->results = BaseResourceCollection::fromArray($data);
       }
       return $this->results;
    }
    
    /**
     *
     * @return FacetResults|null
     */
    final public function getFacets()
    {
       if (is_null($this->facets)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(PagedQueryResponse::FIELD_FACETS);
           if (is_null($data)) {
               return null;
           }
           
           $this->facets = FacetResultsModel::of($data);
       }
       return $this->facets;
    }
    final public function setTotal(?int $total): void
    {
        $this->total = $total;
    }
    
    final public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }
    
    final public function setMeta(?JsonObject $meta): void
    {
        $this->meta = $meta;
    }
    
    final public function setCount(?int $count): void
    {
        $this->count = $count;
    }
    
    final public function setResults(?BaseResourceCollection $results): void
    {
        $this->results = $results;
    }
    
    final public function setFacets(?FacetResults $facets): void
    {
        $this->facets = $facets;
    }
    
}