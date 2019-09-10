<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ItemShippingDetailsModel extends JsonObjectModel implements ItemShippingDetails
{
    
    public function __construct(
        bool $valid = null,
        ItemShippingTargetCollection $targets = null
    ) {
        $this->valid = $valid;
        $this->targets = $targets;
        
    }

    /**
     * @var ?bool
     */
    protected $valid;
    
    /**
     * @var ?ItemShippingTargetCollection
     */
    protected $targets;

    /**
     *
     * @return bool|null
     */
    final public function getValid()
    {
       if (is_null($this->valid)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ItemShippingDetails::FIELD_VALID);
           if (is_null($data)) {
               return null;
           }
           $this->valid = (bool)$data;
       }
       return $this->valid;
    }
    
    /**
     *
     * @return ItemShippingTargetCollection|null
     */
    final public function getTargets()
    {
       if (is_null($this->targets)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ItemShippingDetails::FIELD_TARGETS);
           if (is_null($data)) {
               return null;
           }
           $this->targets = ItemShippingTargetCollection::fromArray($data);
       }
       return $this->targets;
    }
    final public function setValid(?bool $valid): void
    {
        $this->valid = $valid;
    }
    
    final public function setTargets(?ItemShippingTargetCollection $targets): void
    {
        $this->targets = $targets;
    }
    
}