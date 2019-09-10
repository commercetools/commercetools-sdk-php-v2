<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierModel;

final class OrderEditSetCustomTypeActionModel extends JsonObjectModel implements OrderEditSetCustomTypeAction
{
    const DISCRIMINATOR_VALUE = 'setCustomType';
    public function __construct(
        string $action = null,
        JsonObject $fields = null,
        TypeResourceIdentifier $type = null
    ) {
        $this->action = $action;
        $this->fields = $fields;
        $this->type = $type;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?JsonObject
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
           $data = $this->raw(OrderEditUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getFields()
    {
       if (is_null($this->fields)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderEditSetCustomTypeAction::FIELD_FIELDS);
           if (is_null($data)) {
               return null;
           }
           $this->fields = JsonObjectModel::of($data);
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
           $data = $this->raw(OrderEditSetCustomTypeAction::FIELD_TYPE);
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
    
    final public function setFields(?JsonObject $fields): void
    {
        $this->fields = $fields;
    }
    
    final public function setType(?TypeResourceIdentifier $type): void
    {
        $this->type = $type;
    }
    
}