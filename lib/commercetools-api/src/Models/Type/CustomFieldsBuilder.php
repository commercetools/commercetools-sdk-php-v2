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

/**
 * @implements Builder<CustomFields>
 */
final class CustomFieldsBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?FieldContainerBuilder|FieldContainer
     */
    protected $fields;
    
    /**
     * @var ?TypeReferenceBuilder|TypeReference
     */
    protected $type;

    /**
     *
     * @return FieldContainer|null
     */
    final public function getFields()
    {
       return ($this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields);
    }
    
    /**
     *
     * @return TypeReference|null
     */
    final public function getType()
    {
       return ($this->type instanceof TypeReferenceBuilder ? $this->type->build() : $this->type);
    }
    /**
     * @return $this
     */
    final public function withFields(?FieldContainer $fields)
    {
        $this->fields = $fields;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withType(?TypeReference $type)
    {
        $this->type = $type;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withFieldsBuilder(?FieldContainerBuilder $fields)
    {
        $this->fields = $fields;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTypeBuilder(?TypeReferenceBuilder $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    public function build(): CustomFields {
        return new CustomFieldsModel(
            ($this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields),
            ($this->type instanceof TypeReferenceBuilder ? $this->type->build() : $this->type)
        );
    }
    
    public static function of(): CustomFieldsBuilder
    {
        return new self();
    }
}