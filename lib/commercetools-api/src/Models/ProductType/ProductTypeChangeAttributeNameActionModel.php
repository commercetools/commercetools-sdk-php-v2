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


final class ProductTypeChangeAttributeNameActionModel extends JsonObjectModel implements ProductTypeChangeAttributeNameAction
{
    const DISCRIMINATOR_VALUE = 'changeAttributeName';
    public function __construct(
        string $action = null,
        string $newAttributeName = null,
        string $attributeName = null
    ) {
        $this->action = $action;
        $this->newAttributeName = $newAttributeName;
        $this->attributeName = $attributeName;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $newAttributeName;
    
    /**
     * @var ?string
     */
    protected $attributeName;

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
    final public function getNewAttributeName()
    {
       if (is_null($this->newAttributeName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductTypeChangeAttributeNameAction::FIELD_NEW_ATTRIBUTE_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->newAttributeName = (string)$data;
       }
       return $this->newAttributeName;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAttributeName()
    {
       if (is_null($this->attributeName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductTypeChangeAttributeNameAction::FIELD_ATTRIBUTE_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->attributeName = (string)$data;
       }
       return $this->attributeName;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setNewAttributeName(?string $newAttributeName): void
    {
        $this->newAttributeName = $newAttributeName;
    }
    
    final public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }
    
}