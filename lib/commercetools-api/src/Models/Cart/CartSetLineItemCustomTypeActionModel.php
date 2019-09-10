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

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\FieldContainerModel;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierModel;

final class CartSetLineItemCustomTypeActionModel extends JsonObjectModel implements CartSetLineItemCustomTypeAction
{
    const DISCRIMINATOR_VALUE = 'setLineItemCustomType';
    public function __construct(
        string $action = null,
        string $lineItemId = null,
        FieldContainer $fields = null,
        TypeResourceIdentifier $type = null
    ) {
        $this->action = $action;
        $this->lineItemId = $lineItemId;
        $this->fields = $fields;
        $this->type = $type;
        
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
     * @var ?FieldContainer
     */
    protected $fields;
    
    /**
     * @var ?TypeResourceIdentifier
     */
    protected $type;

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
           $data = $this->raw(CartSetLineItemCustomTypeAction::FIELD_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemId = (string)$data;
       }
       return $this->lineItemId;
    }
    
    /**
     *
     * @return FieldContainer|null
     */
    final public function getFields()
    {
       if (is_null($this->fields)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartSetLineItemCustomTypeAction::FIELD_FIELDS);
           if (is_null($data)) {
               return null;
           }
           
           $this->fields = FieldContainerModel::of($data);
       }
       return $this->fields;
    }
    
    /**
     *
     * @return TypeResourceIdentifier|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartSetLineItemCustomTypeAction::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           
           $this->type = TypeResourceIdentifierModel::of($data);
       }
       return $this->type;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }
    
    final public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }
    
    final public function setType(?TypeResourceIdentifier $type): void
    {
        $this->type = $type;
    }
    
}