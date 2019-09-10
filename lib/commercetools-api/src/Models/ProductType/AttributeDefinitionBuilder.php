<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<AttributeDefinition>
 */
final class AttributeDefinitionBuilder implements Builder
{
    public function __construct() {
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
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $label;
    
    /**
     * @var ?AttributeTypeBuilder|AttributeType
     */
    protected $type;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $inputTip;

    /**
     *
     * @return bool|null
     */
    final public function getIsRequired()
    {
       return $this->isRequired;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAttributeConstraint()
    {
       return $this->attributeConstraint;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInputHint()
    {
       return $this->inputHint;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsSearchable()
    {
       return $this->isSearchable;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getLabel()
    {
       return ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label);
    }
    
    /**
     *
     * @return AttributeType|null
     */
    final public function getType()
    {
       return ($this->type instanceof AttributeTypeBuilder ? $this->type->build() : $this->type);
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getInputTip()
    {
       return ($this->inputTip instanceof LocalizedStringBuilder ? $this->inputTip->build() : $this->inputTip);
    }
    /**
     * @return $this
     */
    final public function withIsRequired(?bool $isRequired)
    {
        $this->isRequired = $isRequired;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAttributeConstraint(?string $attributeConstraint)
    {
        $this->attributeConstraint = $attributeConstraint;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withName(?string $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInputHint(?string $inputHint)
    {
        $this->inputHint = $inputHint;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withIsSearchable(?bool $isSearchable)
    {
        $this->isSearchable = $isSearchable;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLabel(?LocalizedString $label)
    {
        $this->label = $label;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withType(?AttributeType $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInputTip(?LocalizedString $inputTip)
    {
        $this->inputTip = $inputTip;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withLabelBuilder(?LocalizedStringBuilder $label)
    {
        $this->label = $label;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTypeBuilder(?AttributeTypeBuilder $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInputTipBuilder(?LocalizedStringBuilder $inputTip)
    {
        $this->inputTip = $inputTip;
        
        return $this;
    }
    
    public function build(): AttributeDefinition {
        return new AttributeDefinitionModel(
            $this->isRequired,
            $this->attributeConstraint,
            $this->name,
            $this->inputHint,
            $this->isSearchable,
            ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label),
            ($this->type instanceof AttributeTypeBuilder ? $this->type->build() : $this->type),
            ($this->inputTip instanceof LocalizedStringBuilder ? $this->inputTip->build() : $this->inputTip)
        );
    }
    
    public static function of(): AttributeDefinitionBuilder
    {
        return new self();
    }
}