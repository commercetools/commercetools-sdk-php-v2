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


final class ShoppingListChangeTextLineItemQuantityActionModel extends JsonObjectModel implements ShoppingListChangeTextLineItemQuantityAction
{
    const DISCRIMINATOR_VALUE = 'changeTextLineItemQuantity';
    public function __construct(
        string $action = null,
        int $quantity = null,
        string $textLineItemId = null
    ) {
        $this->action = $action;
        $this->quantity = $quantity;
        $this->textLineItemId = $textLineItemId;
        
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
           $data = $this->raw(ShoppingListChangeTextLineItemQuantityAction::FIELD_QUANTITY);
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
    final public function getTextLineItemId()
    {
       if (is_null($this->textLineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListChangeTextLineItemQuantityAction::FIELD_TEXT_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->textLineItemId = (string)$data;
       }
       return $this->textLineItemId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setTextLineItemId(?string $textLineItemId): void
    {
        $this->textLineItemId = $textLineItemId;
    }
    
}