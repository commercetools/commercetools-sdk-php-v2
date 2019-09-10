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


final class TypeChangeLocalizedEnumValueOrderActionModel extends JsonObjectModel implements TypeChangeLocalizedEnumValueOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeLocalizedEnumValueOrder';
    public function __construct(
        string $action = null,
        string $fieldName = null,
        array $keys = null
    ) {
        $this->action = $action;
        $this->fieldName = $fieldName;
        $this->keys = $keys;
        
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
     * @var ?array
     */
    protected $keys;

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
           $data = $this->raw(TypeChangeLocalizedEnumValueOrderAction::FIELD_FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->fieldName = (string)$data;
       }
       return $this->fieldName;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getKeys()
    {
       if (is_null($this->keys)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(TypeChangeLocalizedEnumValueOrderAction::FIELD_KEYS);
           if (is_null($data)) {
               return null;
           }
           $this->keys = $data;
       }
       return $this->keys;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setFieldName(?string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }
    
    final public function setKeys(?array $keys): void
    {
        $this->keys = $keys;
    }
    
}