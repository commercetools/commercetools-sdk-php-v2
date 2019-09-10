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


final class TypeChangeFieldDefinitionOrderActionModel extends JsonObjectModel implements TypeChangeFieldDefinitionOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeFieldDefinitionOrder';
    public function __construct(
        string $action = null,
        array $fieldNames = null
    ) {
        $this->action = $action;
        $this->fieldNames = $fieldNames;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?array
     */
    protected $fieldNames;

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
     * @return array|null
     */
    final public function getFieldNames()
    {
       if (is_null($this->fieldNames)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(TypeChangeFieldDefinitionOrderAction::FIELD_FIELD_NAMES);
           if (is_null($data)) {
               return null;
           }
           $this->fieldNames = $data;
       }
       return $this->fieldNames;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setFieldNames(?array $fieldNames): void
    {
        $this->fieldNames = $fieldNames;
    }
    
}