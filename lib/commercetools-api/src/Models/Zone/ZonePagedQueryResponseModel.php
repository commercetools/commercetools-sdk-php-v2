<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ZonePagedQueryResponseModel extends JsonObjectModel implements ZonePagedQueryResponse
{
    
    public function __construct(
        int $total = null,
        int $offset = null,
        int $count = null,
        ZoneCollection $results = null
    ) {
        $this->total = $total;
        $this->offset = $offset;
        $this->count = $count;
        $this->results = $results;
        
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
     * @var ?ZoneCollection
     */
    protected $results;

    /**
     *
     * @return int|null
     */
    final public function getTotal()
    {
       if (is_null($this->total)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ZonePagedQueryResponse::FIELD_TOTAL);
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
           $data = $this->raw(ZonePagedQueryResponse::FIELD_OFFSET);
           if (is_null($data)) {
               return null;
           }
           $this->offset = (int)$data;
       }
       return $this->offset;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getCount()
    {
       if (is_null($this->count)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ZonePagedQueryResponse::FIELD_COUNT);
           if (is_null($data)) {
               return null;
           }
           $this->count = (int)$data;
       }
       return $this->count;
    }
    
    /**
     *
     * @return ZoneCollection|null
     */
    final public function getResults()
    {
       if (is_null($this->results)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ZonePagedQueryResponse::FIELD_RESULTS);
           if (is_null($data)) {
               return null;
           }
           $this->results = ZoneCollection::fromArray($data);
       }
       return $this->results;
    }
    final public function setTotal(?int $total): void
    {
        $this->total = $total;
    }
    
    final public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }
    
    final public function setCount(?int $count): void
    {
        $this->count = $count;
    }
    
    final public function setResults(?ZoneCollection $results): void
    {
        $this->results = $results;
    }
    
}