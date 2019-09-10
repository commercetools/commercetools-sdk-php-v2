<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<FieldDefinition>
 */
final class FieldDefinitionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $inputHint;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $label;
    
    /**
     * @var ?JsonObject
     */
    protected $type;
    
    /**
     * @var ?bool
     */
    protected $required;

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
     * @return LocalizedString|null
     */
    final public function getLabel()
    {
       return ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label);
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getRequired()
    {
       return $this->required;
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
    final public function withLabel(?LocalizedString $label)
    {
        $this->label = $label;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withType(?JsonObject $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withRequired(?bool $required)
    {
        $this->required = $required;
        
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
    
    public function build(): FieldDefinition {
        return new FieldDefinitionModel(
            $this->name,
            $this->inputHint,
            ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label),
            $this->type,
            $this->required
        );
    }
    
    public static function of(): FieldDefinitionBuilder
    {
        return new self();
    }
}