<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TypePagedQueryResponse>
 */
final class TypePagedQueryResponseBuilder implements Builder
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
     * @var ?TypeCollection
     */
    protected $results;

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
     * @return TypeCollection|null
     */
    final public function getResults()
    {
       return $this->results;
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
    final public function withResults(?TypeCollection $results)
    {
        $this->results = $results;
        
        return $this;
    }
    
    public function build(): TypePagedQueryResponse {
        return new TypePagedQueryResponseModel(
            $this->total,
            $this->offset,
            $this->count,
            $this->results
        );
    }
    
    public static function of(): TypePagedQueryResponseBuilder
    {
        return new self();
    }
}