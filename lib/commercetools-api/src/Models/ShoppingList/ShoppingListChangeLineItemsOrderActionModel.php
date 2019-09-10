<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ShoppingListChangeLineItemsOrderActionModel extends JsonObjectModel implements ShoppingListChangeLineItemsOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeLineItemsOrder';
    public function __construct(
        string $action = null,
        array $lineItemOrder = null
    ) {
        $this->action = $action;
        $this->lineItemOrder = $lineItemOrder;
        
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
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getLineItemOrder()
    {
       if (is_null($this->lineItemOrder)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(ShoppingListChangeLineItemsOrderAction::FIELD_LINE_ITEM_ORDER);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemOrder = $data;
       }
       return $this->lineItemOrder;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setLineItemOrder(?array $lineItemOrder): void
    {
        $this->lineItemOrder = $lineItemOrder;
    }
    
}