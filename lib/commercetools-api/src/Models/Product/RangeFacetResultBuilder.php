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
 * @implements Builder<RangeFacetResult>
 */
final class RangeFacetResultBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?FacetResultRangeCollection
     */
    protected $ranges;

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
     * @return FacetResultRangeCollection|null
     */
    final public function getRanges()
    {
       return $this->ranges;
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
    final public function withRanges(?FacetResultRangeCollection $ranges)
    {
        $this->ranges = $ranges;
        
        return $this;
    }
    
    public function build(): RangeFacetResult {
        return new RangeFacetResultModel(
            $this->type,
            $this->ranges
        );
    }
    
    public static function of(): RangeFacetResultBuilder
    {
        return new self();
    }
}