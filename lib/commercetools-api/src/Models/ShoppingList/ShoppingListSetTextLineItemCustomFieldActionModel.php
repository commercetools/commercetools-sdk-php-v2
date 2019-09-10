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


final class ShoppingListSetTextLineItemCustomFieldActionModel extends JsonObjectModel implements ShoppingListSetTextLineItemCustomFieldAction
{
    const DISCRIMINATOR_VALUE = 'setTextLineItemCustomField';
    public function __construct(
        string $action = null,
        string $name = null,
        JsonObject $value = null,
        string $textLineItemId = null
    ) {
        $this->action = $action;
        $this->name = $name;
        $this->value = $value;
        $this->textLineItemId = $textLineItemId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?JsonObject
     */
    protected $value;
    
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
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListSetTextLineItemCustomFieldAction::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var ?stdClass $data */
           $data = $this->raw(ShoppingListSetTextLineItemCustomFieldAction::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->value = JsonObjectModel::of($data);
       }
       return $this->value;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTextLineItemId()
    {
       if (is_null($this->textLineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListSetTextLineItemCustomFieldAction::FIELD_TEXT_LINE_ITEM_ID);
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
    
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setValue(?JsonObject $value): void
    {
        $this->value = $value;
    }
    
    final public function setTextLineItemId(?string $textLineItemId): void
    {
        $this->textLineItemId = $textLineItemId;
    }
    
}