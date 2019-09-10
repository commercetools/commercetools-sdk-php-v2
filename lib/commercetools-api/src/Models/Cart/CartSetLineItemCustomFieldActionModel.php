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


final class CartSetLineItemCustomFieldActionModel extends JsonObjectModel implements CartSetLineItemCustomFieldAction
{
    const DISCRIMINATOR_VALUE = 'setLineItemCustomField';
    public function __construct(
        string $action = null,
        string $lineItemId = null,
        string $name = null,
        JsonObject $value = null
    ) {
        $this->action = $action;
        $this->lineItemId = $lineItemId;
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
    protected $lineItemId;
    
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
    final public function getLineItemId()
    {
       if (is_null($this->lineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartSetLineItemCustomFieldAction::FIELD_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemId = (string)$data;
       }
       return $this->lineItemId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartSetLineItemCustomFieldAction::FIELD_NAME);
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
           $data = $this->raw(CartSetLineItemCustomFieldAction::FIELD_VALUE);
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
    
    final public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
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