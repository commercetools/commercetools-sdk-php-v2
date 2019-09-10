<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class InventoryEntryRemoveQuantityActionModel extends JsonObjectModel implements InventoryEntryRemoveQuantityAction
{
    const DISCRIMINATOR_VALUE = 'removeQuantity';
    public function __construct(
        string $action = null,
        int $quantity = null
    ) {
        $this->action = $action;
        $this->quantity = $quantity;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(InventoryEntryUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(InventoryEntryRemoveQuantityAction::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
}