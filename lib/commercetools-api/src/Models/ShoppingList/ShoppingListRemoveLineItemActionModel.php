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


final class ShoppingListRemoveLineItemActionModel extends JsonObjectModel implements ShoppingListRemoveLineItemAction
{
    const DISCRIMINATOR_VALUE = 'removeLineItem';
    public function __construct(
        string $action = null,
        int $quantity = null,
        string $lineItemId = null
    ) {
        $this->action = $action;
        $this->quantity = $quantity;
        $this->lineItemId = $lineItemId;
        
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
    protected $lineItemId;

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
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ShoppingListRemoveLineItemAction::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLineItemId()
    {
       if (is_null($this->lineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListRemoveLineItemAction::FIELD_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemId = (string)$data;
       }
       return $this->lineItemId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }
    
}