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


final class InventoryEntrySetRestockableInDaysActionModel extends JsonObjectModel implements InventoryEntrySetRestockableInDaysAction
{
    const DISCRIMINATOR_VALUE = 'setRestockableInDays';
    public function __construct(
        string $action = null,
        int $restockableInDays = null
    ) {
        $this->action = $action;
        $this->restockableInDays = $restockableInDays;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $restockableInDays;

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
    final public function getRestockableInDays()
    {
       if (is_null($this->restockableInDays)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(InventoryEntrySetRestockableInDaysAction::FIELD_RESTOCKABLE_IN_DAYS);
           if (is_null($data)) {
               return null;
           }
           $this->restockableInDays = (int)$data;
       }
       return $this->restockableInDays;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setRestockableInDays(?int $restockableInDays): void
    {
        $this->restockableInDays = $restockableInDays;
    }
    
}