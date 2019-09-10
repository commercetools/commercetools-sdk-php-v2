<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InventoryEntrySetRestockableInDaysAction>
 */
final class InventoryEntrySetRestockableInDaysActionBuilder implements Builder
{
    public function __construct() {
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
       return $this->action;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getRestockableInDays()
    {
       return $this->restockableInDays;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withRestockableInDays(?int $restockableInDays)
    {
        $this->restockableInDays = $restockableInDays;
        
        return $this;
    }
    
    public function build(): InventoryEntrySetRestockableInDaysAction {
        return new InventoryEntrySetRestockableInDaysActionModel(
            $this->action,
            $this->restockableInDays
        );
    }
    
    public static function of(): InventoryEntrySetRestockableInDaysActionBuilder
    {
        return new self();
    }
}