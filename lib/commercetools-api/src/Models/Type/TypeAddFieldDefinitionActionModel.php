<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class TypeAddFieldDefinitionActionModel extends JsonObjectModel implements TypeAddFieldDefinitionAction
{
    const DISCRIMINATOR_VALUE = 'addFieldDefinition';
    public function __construct(
        string $action = null,
        FieldDefinition $fieldDefinition = null
    ) {
        $this->action = $action;
        $this->fieldDefinition = $fieldDefinition;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?FieldDefinition
     */
    protected $fieldDefinition;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TypeUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return FieldDefinition|null
     */
    final public function getFieldDefinition()
    {
       if (is_null($this->fieldDefinition)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(TypeAddFieldDefinitionAction::FIELD_FIELD_DEFINITION);
           if (is_null($data)) {
               return null;
           }
           
           $this->fieldDefinition = FieldDefinitionModel::of($data);
       }
       return $this->fieldDefinition;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setFieldDefinition(?FieldDefinition $fieldDefinition): void
    {
        $this->fieldDefinition = $fieldDefinition;
    }
    
}