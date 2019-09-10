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


final class TypeRemoveFieldDefinitionActionModel extends JsonObjectModel implements TypeRemoveFieldDefinitionAction
{
    const DISCRIMINATOR_VALUE = 'removeFieldDefinition';
    public function __construct(
        string $action = null,
        string $fieldName = null
    ) {
        $this->action = $action;
        $this->fieldName = $fieldName;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $fieldName;

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
     * @return string|null
     */
    final public function getFieldName()
    {
       if (is_null($this->fieldName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TypeRemoveFieldDefinitionAction::FIELD_FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->fieldName = (string)$data;
       }
       return $this->fieldName;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setFieldName(?string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }
    
}