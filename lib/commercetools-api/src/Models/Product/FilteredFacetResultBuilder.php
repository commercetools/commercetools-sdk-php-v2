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
 * @implements Builder<FilteredFacetResult>
 */
final class FilteredFacetResultBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?int
     */
    protected $count;
    
    /**
     * @var ?int
     */
    protected $productCount;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
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
     * @return int|null
     */
    final public function getProductCount()
    {
       return $this->productCount;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
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
    final public function withProductCount(?int $productCount)
    {
        $this->productCount = $productCount;
        
        return $this;
    }
    
    public function build(): FilteredFacetResult {
        return new FilteredFacetResultModel(
            $this->type,
            $this->count,
            $this->productCount
        );
    }
    
    public static function of(): FilteredFacetResultBuilder
    {
        return new self();
    }
}