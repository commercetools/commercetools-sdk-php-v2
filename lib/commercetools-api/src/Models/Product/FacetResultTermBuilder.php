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
 * @implements Builder<FacetResultTerm>
 */
final class FacetResultTermBuilder implements Builder
{
    public function __construct() {
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
       return $this->count;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getTerm()
    {
       return $this->term;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getProductCount()
    {
       return $this->productCount;
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
    final public function withTerm(?JsonObject $term)
    {
        $this->term = $term;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductCount(?int $productCount)
    {
        $this->productCount = $productCount;
        
        return $this;
    }
    
    public function build(): FacetResultTerm {
        return new FacetResultTermModel(
            $this->count,
            $this->term,
            $this->productCount
        );
    }
    
    public static function of(): FacetResultTermBuilder
    {
        return new self();
    }
}