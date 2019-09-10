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


final class ProductTypeChangeLocalizedEnumValueLabelActionModel extends JsonObjectModel implements ProductTypeChangeLocalizedEnumValueLabelAction
{
    const DISCRIMINATOR_VALUE = 'changeLocalizedEnumValueLabel';
    public function __construct(
        string $action = null,
        AttributeLocalizedEnumValue $newValue = null,
        string $attributeName = null
    ) {
        $this->action = $action;
        $this->newValue = $newValue;
        $this->attributeName = $attributeName;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?AttributeLocalizedEnumValue
     */
    protected $newValue;
    
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
     * @return AttributeLocalizedEnumValue|null
     */
    final public function getNewValue()
    {
       if (is_null($this->newValue)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductTypeChangeLocalizedEnumValueLabelAction::FIELD_NEW_VALUE);
           if (is_null($data)) {
               return null;
           }
           
           $this->newValue = AttributeLocalizedEnumValueModel::of($data);
       }
       return $this->newValue;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAttributeName()
    {
       if (is_null($this->attributeName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductTypeChangeLocalizedEnumValueLabelAction::FIELD_ATTRIBUTE_NAME);
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
    
    final public function setNewValue(?AttributeLocalizedEnumValue $newValue): void
    {
        $this->newValue = $newValue;
    }
    
    final public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }
    
}