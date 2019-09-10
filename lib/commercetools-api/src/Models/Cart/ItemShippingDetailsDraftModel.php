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


final class ItemShippingDetailsDraftModel extends JsonObjectModel implements ItemShippingDetailsDraft
{
    
    public function __construct(
        ItemShippingTargetCollection $targets = null
    ) {
        $this->targets = $targets;
        
    }

    /**
     * @var ?ItemShippingTargetCollection
     */
    protected $targets;

    /**
     *
     * @return ItemShippingTargetCollection|null
     */
    final public function getTargets()
    {
       if (is_null($this->targets)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ItemShippingDetailsDraft::FIELD_TARGETS);
           if (is_null($data)) {
               return null;
           }
           $this->targets = ItemShippingTargetCollection::fromArray($data);
       }
       return $this->targets;
    }
    final public function setTargets(?ItemShippingTargetCollection $targets): void
    {
        $this->targets = $targets;
    }
    
}