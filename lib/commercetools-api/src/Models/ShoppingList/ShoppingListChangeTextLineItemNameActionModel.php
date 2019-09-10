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

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class ShoppingListChangeTextLineItemNameActionModel extends JsonObjectModel implements ShoppingListChangeTextLineItemNameAction
{
    const DISCRIMINATOR_VALUE = 'changeTextLineItemName';
    public function __construct(
        string $action = null,
        LocalizedString $name = null,
        string $textLineItemId = null
    ) {
        $this->action = $action;
        $this->name = $name;
        $this->textLineItemId = $textLineItemId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?LocalizedString
     */
    protected $name;
    
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
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingListChangeTextLineItemNameAction::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTextLineItemId()
    {
       if (is_null($this->textLineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListChangeTextLineItemNameAction::FIELD_TEXT_LINE_ITEM_ID);
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
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setTextLineItemId(?string $textLineItemId): void
    {
        $this->textLineItemId = $textLineItemId;
    }
    
}