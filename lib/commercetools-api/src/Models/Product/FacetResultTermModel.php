<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class FacetResultTermModel extends JsonObjectModel implements FacetResultTerm
{
    
    public function __construct(
        int $count = null,
        JsonObject $term = null,
        int $productCount = null
    ) {
        $this->count = $count;
        $this->term = $term;
        $this->productCount = $productCount;
        
    }

    /**
     * @var ?int
     */
    protected $count;
    
    /**
     * @var ?JsonObject
     */
    protected $term;
    
    /**
     * @var ?int
     */
    protected $productCount;

    /**
     *
     * @return int|null
     */
    final public function getCount()
    {
       if (is_null($this->count)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(FacetResultTerm::FIELD_COUNT);
           if (is_null($data)) {
               return null;
           }
           $this->count = (int)$data;
       }
       return $this->count;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getTerm()
    {
       if (is_null($this->term)) {
           /** @psalm-var ?stdClass $data */
           $data = $this->raw(FacetResultTerm::FIELD_TERM);
           if (is_null($data)) {
               return null;
           }
           $this->term = JsonObjectModel::of($data);
       }
       return $this->term;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getProductCount()
    {
       if (is_null($this->productCount)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(FacetResultTerm::FIELD_PRODUCT_COUNT);
           if (is_null($data)) {
               return null;
           }
           $this->productCount = (int)$data;
       }
       return $this->productCount;
    }
    final public function setCount(?int $count): void
    {
        $this->count = $count;
    }
    
    final public function setTerm(?JsonObject $term): void
    {
        $this->term = $term;
    }
    
    final public function setProductCount(?int $productCount): void
    {
        $this->productCount = $productCount;
    }
    
}