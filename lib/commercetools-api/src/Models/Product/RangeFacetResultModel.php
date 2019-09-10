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


final class RangeFacetResultModel extends JsonObjectModel implements RangeFacetResult
{
    const DISCRIMINATOR_VALUE = 'range';
    public function __construct(
        string $type = null,
        FacetResultRangeCollection $ranges = null
    ) {
        $this->type = $type;
        $this->ranges = $ranges;
        
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
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(FacetResult::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return FacetResultRangeCollection|null
     */
    final public function getRanges()
    {
       if (is_null($this->ranges)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(RangeFacetResult::FIELD_RANGES);
           if (is_null($data)) {
               return null;
           }
           $this->ranges = FacetResultRangeCollection::fromArray($data);
       }
       return $this->ranges;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setRanges(?FacetResultRangeCollection $ranges): void
    {
        $this->ranges = $ranges;
    }
    
}