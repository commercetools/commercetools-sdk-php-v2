<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerPagedQueryResponse>
 */
final class CustomerPagedQueryResponseBuilder implements Builder
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
     * @var ?CustomerCollection
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
     * @return CustomerCollection|null
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
    final public function withResults(?CustomerCollection $results)
    {
        $this->results = $results;
        
        return $this;
    }
    
    public function build(): CustomerPagedQueryResponse {
        return new CustomerPagedQueryResponseModel(
            $this->total,
            $this->offset,
            $this->count,
            $this->results
        );
    }
    
    public static function of(): CustomerPagedQueryResponseBuilder
    {
        return new self();
    }
}