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
 * @implements Builder<ShoppingListChangeTextLineItemsOrderAction>
 */
final class ShoppingListChangeTextLineItemsOrderActionBuilder implements Builder
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
    protected $textLineItemOrder;

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
    final public function getTextLineItemOrder()
    {
       return $this->textLineItemOrder;
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
    final public function withTextLineItemOrder(?array $textLineItemOrder)
    {
        $this->textLineItemOrder = $textLineItemOrder;
        
        return $this;
    }
    
    public function build(): ShoppingListChangeTextLineItemsOrderAction {
        return new ShoppingListChangeTextLineItemsOrderActionModel(
            $this->action,
            $this->textLineItemOrder
        );
    }
    
    public static function of(): ShoppingListChangeTextLineItemsOrderActionBuilder
    {
        return new self();
    }
}