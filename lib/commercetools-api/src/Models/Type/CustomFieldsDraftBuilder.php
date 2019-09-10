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
 * @implements Builder<CustomFieldsDraft>
 */
final class CustomFieldsDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?FieldContainerBuilder|FieldContainer
     */
    protected $fields;
    
    /**
     * @var ?TypeResourceIdentifierBuilder|TypeResourceIdentifier
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
     * @return TypeResourceIdentifier|null
     */
    final public function getType()
    {
       return ($this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type);
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
    final public function withType(?TypeResourceIdentifier $type)
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
    final public function withTypeBuilder(?TypeResourceIdentifierBuilder $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    public function build(): CustomFieldsDraft {
        return new CustomFieldsDraftModel(
            ($this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields),
            ($this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type)
        );
    }
    
    public static function of(): CustomFieldsDraftBuilder
    {
        return new self();
    }
}