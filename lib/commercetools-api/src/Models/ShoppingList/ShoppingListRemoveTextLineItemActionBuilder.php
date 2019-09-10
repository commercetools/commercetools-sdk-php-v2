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
 * @implements Builder<ShoppingListRemoveTextLineItemAction>
 */
final class ShoppingListRemoveTextLineItemActionBuilder implements Builder
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
    protected $quantity;
    
    /**
     * @var ?string
     */
    protected $textLineItemId;

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
    final public function getQuantity()
    {
       return $this->quantity;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTextLineItemId()
    {
       return $this->textLineItemId;
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
    final public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTextLineItemId(?string $textLineItemId)
    {
        $this->textLineItemId = $textLineItemId;
        
        return $this;
    }
    
    public function build(): ShoppingListRemoveTextLineItemAction {
        return new ShoppingListRemoveTextLineItemActionModel(
            $this->action,
            $this->quantity,
            $this->textLineItemId
        );
    }
    
    public static function of(): ShoppingListRemoveTextLineItemActionBuilder
    {
        return new self();
    }
}