<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShoppingListChangeLineItemsOrderAction>
 */
final class ShoppingListChangeLineItemsOrderActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?array
     */
    protected $lineItemOrder;

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
     * @return array|null
     */
    final public function getLineItemOrder()
    {
       return $this->lineItemOrder;
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
    final public function withLineItemOrder(?array $lineItemOrder)
    {
        $this->lineItemOrder = $lineItemOrder;
        
        return $this;
    }
    
    public function build(): ShoppingListChangeLineItemsOrderAction {
        return new ShoppingListChangeLineItemsOrderActionModel(
            $this->action,
            $this->lineItemOrder
        );
    }
    
    public static function of(): ShoppingListChangeLineItemsOrderActionBuilder
    {
        return new self();
    }
}