<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CartSetCustomLineItemCustomFieldActionModel extends JsonObjectModel implements CartSetCustomLineItemCustomFieldAction
{
    const DISCRIMINATOR_VALUE = 'setCustomLineItemCustomField';
    public function __construct(
        string $action = null,
        string $customLineItemId = null,
        string $name = null,
        JsonObject $value = null
    ) {
        $this->action = $action;
        $this->customLineItemId = $customLineItemId;
        $this->name = $name;
        $this->value = $value;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $customLineItemId;
    
    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?JsonObject
     */
    protected $value;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartUpdateAction::FIELD_ACTION);
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
    final public function getCustomLineItemId()
    {
       if (is_null($this->customLineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartSetCustomLineItemCustomFieldAction::FIELD_CUSTOM_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->customLineItemId = (string)$data;
       }
       return $this->customLineItemId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartSetCustomLineItemCustomFieldAction::FIELD_NAME);
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
           $data = $this->raw(CartSetCustomLineItemCustomFieldAction::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->value = JsonObjectModel::of($data);
       }
       return $this->value;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }
    
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setValue(?JsonObject $value): void
    {
        $this->value = $value;
    }
    
}