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

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class AttributeDefinitionModel extends JsonObjectModel implements AttributeDefinition
{
    
    public function __construct(
        bool $isRequired = null,
        string $attributeConstraint = null,
        string $name = null,
        string $inputHint = null,
        bool $isSearchable = null,
        LocalizedString $label = null,
        AttributeType $type = null,
        LocalizedString $inputTip = null
    ) {
        $this->isRequired = $isRequired;
        $this->attributeConstraint = $attributeConstraint;
        $this->name = $name;
        $this->inputHint = $inputHint;
        $this->isSearchable = $isSearchable;
        $this->label = $label;
        $this->type = $type;
        $this->inputTip = $inputTip;
        
    }

    /**
     * @var ?bool
     */
    protected $isRequired;
    
    /**
     * @var ?string
     */
    protected $attributeConstraint;
    
    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $inputHint;
    
    /**
     * @var ?bool
     */
    protected $isSearchable;
    
    /**
     * @var ?LocalizedString
     */
    protected $label;
    
    /**
     * @var ?AttributeType
     */
    protected $type;
    
    /**
     * @var ?LocalizedString
     */
    protected $inputTip;

    /**
     *
     * @return bool|null
     */
    final public function getIsRequired()
    {
       if (is_null($this->isRequired)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(AttributeDefinition::FIELD_IS_REQUIRED);
           if (is_null($data)) {
               return null;
           }
           $this->isRequired = (bool)$data;
       }
       return $this->isRequired;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAttributeConstraint()
    {
       if (is_null($this->attributeConstraint)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(AttributeDefinition::FIELD_ATTRIBUTE_CONSTRAINT);
           if (is_null($data)) {
               return null;
           }
           $this->attributeConstraint = (string)$data;
       }
       return $this->attributeConstraint;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(AttributeDefinition::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInputHint()
    {
       if (is_null($this->inputHint)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(AttributeDefinition::FIELD_INPUT_HINT);
           if (is_null($data)) {
               return null;
           }
           $this->inputHint = (string)$data;
       }
       return $this->inputHint;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsSearchable()
    {
       if (is_null($this->isSearchable)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(AttributeDefinition::FIELD_IS_SEARCHABLE);
           if (is_null($data)) {
               return null;
           }
           $this->isSearchable = (bool)$data;
       }
       return $this->isSearchable;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getLabel()
    {
       if (is_null($this->label)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(AttributeDefinition::FIELD_LABEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->label = LocalizedStringModel::of($data);
       }
       return $this->label;
    }
    
    /**
     *
     * @return AttributeType|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(AttributeDefinition::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $className = AttributeTypeModel::resolveDiscriminatorClass($data);
           $this->type = $className::of($data);
       }
       return $this->type;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getInputTip()
    {
       if (is_null($this->inputTip)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(AttributeDefinition::FIELD_INPUT_TIP);
           if (is_null($data)) {
               return null;
           }
           
           $this->inputTip = LocalizedStringModel::of($data);
       }
       return $this->inputTip;
    }
    final public function setIsRequired(?bool $isRequired): void
    {
        $this->isRequired = $isRequired;
    }
    
    final public function setAttributeConstraint(?string $attributeConstraint): void
    {
        $this->attributeConstraint = $attributeConstraint;
    }
    
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setInputHint(?string $inputHint): void
    {
        $this->inputHint = $inputHint;
    }
    
    final public function setIsSearchable(?bool $isSearchable): void
    {
        $this->isSearchable = $isSearchable;
    }
    
    final public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }
    
    final public function setType(?AttributeType $type): void
    {
        $this->type = $type;
    }
    
    final public function setInputTip(?LocalizedString $inputTip): void
    {
        $this->inputTip = $inputTip;
    }
    
}