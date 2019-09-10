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
 * @implements Builder<FacetResultRange>
 */
final class FacetResultRangeBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $toStr;
    
    /**
     * @var ?int
     */
    protected $total;
    
    /**
     * @var ?int
     */
    protected $min;
    
    /**
     * @var ?string
     */
    protected $fromStr;
    
    /**
     * @var ?int
     */
    protected $max;
    
    /**
     * @var ?int
     */
    protected $mean;
    
    /**
     * @var ?int
     */
    protected $count;
    
    /**
     * @var ?int
     */
    protected $from;
    
    /**
     * @var ?int
     */
    protected $to;
    
    /**
     * @var ?int
     */
    protected $productCount;

    /**
     *
     * @return string|null
     */
    final public function getToStr()
    {
       return $this->toStr;
    }
    
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
    final public function getMin()
    {
       return $this->min;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getFromStr()
    {
       return $this->fromStr;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getMax()
    {
       return $this->max;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getMean()
    {
       return $this->mean;
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
    final public function getFrom()
    {
       return $this->from;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getTo()
    {
       return $this->to;
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
    final public function withToStr(?string $toStr)
    {
        $this->toStr = $toStr;
        
        return $this;
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
    final public function withMin(?int $min)
    {
        $this->min = $min;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFromStr(?string $fromStr)
    {
        $this->fromStr = $fromStr;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMax(?int $max)
    {
        $this->max = $max;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMean(?int $mean)
    {
        $this->mean = $mean;
        
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
    final public function withFrom(?int $from)
    {
        $this->from = $from;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTo(?int $to)
    {
        $this->to = $to;
        
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
    
    public function build(): FacetResultRange {
        return new FacetResultRangeModel(
            $this->toStr,
            $this->total,
            $this->min,
            $this->fromStr,
            $this->max,
            $this->mean,
            $this->count,
            $this->from,
            $this->to,
            $this->productCount
        );
    }
    
    public static function of(): FacetResultRangeBuilder
    {
        return new self();
    }
}