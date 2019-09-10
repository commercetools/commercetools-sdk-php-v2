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


final class ShoppingListChangeTextLineItemsOrderActionModel extends JsonObjectModel implements ShoppingListChangeTextLineItemsOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeTextLineItemsOrder';
    public function __construct(
        string $action = null,
        array $textLineItemOrder = null
    ) {
        $this->action = $action;
        $this->textLineItemOrder = $textLineItemOrder;
        
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
    final public function getTextLineItemOrder()
    {
       if (is_null($this->textLineItemOrder)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(ShoppingListChangeTextLineItemsOrderAction::FIELD_TEXT_LINE_ITEM_ORDER);
           if (is_null($data)) {
               return null;
           }
           $this->textLineItemOrder = $data;
       }
       return $this->textLineItemOrder;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setTextLineItemOrder(?array $textLineItemOrder): void
    {
        $this->textLineItemOrder = $textLineItemOrder;
    }
    
}