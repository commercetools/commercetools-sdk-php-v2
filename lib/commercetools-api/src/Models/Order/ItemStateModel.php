<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;

final class ItemStateModel extends JsonObjectModel implements ItemState
{
    
    public function __construct(
        int $quantity = null,
        StateReference $state = null
    ) {
        $this->quantity = $quantity;
        $this->state = $state;
        
    }

    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?StateReference
     */
    protected $state;

    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ItemState::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ItemState::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->state = StateReferenceModel::of($data);
       }
       return $this->state;
    }
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }
    
}