<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ProductTypeChangeEnumKeyActionModel extends JsonObjectModel implements ProductTypeChangeEnumKeyAction
{
    const DISCRIMINATOR_VALUE = 'changeEnumKey';
    public function __construct(
        string $action = null,
        string $newKey = null,
        string $attributeName = null,
        string $key = null
    ) {
        $this->action = $action;
        $this->newKey = $newKey;
        $this->attributeName = $attributeName;
        $this->key = $key;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $newKey;
    
    /**
     * @var ?string
     */
    protected $attributeName;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductTypeUpdateAction::FIELD_ACTION);
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
    final public function getNewKey()
    {
       if (is_null($this->newKey)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductTypeChangeEnumKeyAction::FIELD_NEW_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->newKey = (string)$data;
       }
       return $this->newKey;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAttributeName()
    {
       if (is_null($this->attributeName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductTypeChangeEnumKeyAction::FIELD_ATTRIBUTE_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->attributeName = (string)$data;
       }
       return $this->attributeName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductTypeChangeEnumKeyAction::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setNewKey(?string $newKey): void
    {
        $this->newKey = $newKey;
    }
    
    final public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}