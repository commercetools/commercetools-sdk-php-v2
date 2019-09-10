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
 * @implements Builder<CustomFieldSetType>
 */
final class CustomFieldSetTypeBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?FieldTypeBuilder|FieldType
     */
    protected $elementType;

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
     * @return FieldType|null
     */
    final public function getElementType()
    {
       return ($this->elementType instanceof FieldTypeBuilder ? $this->elementType->build() : $this->elementType);
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
    final public function withElementType(?FieldType $elementType)
    {
        $this->elementType = $elementType;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withElementTypeBuilder(?FieldTypeBuilder $elementType)
    {
        $this->elementType = $elementType;
        
        return $this;
    }
    
    public function build(): CustomFieldSetType {
        return new CustomFieldSetTypeModel(
            $this->name,
            ($this->elementType instanceof FieldTypeBuilder ? $this->elementType->build() : $this->elementType)
        );
    }
    
    public static function of(): CustomFieldSetTypeBuilder
    {
        return new self();
    }
}