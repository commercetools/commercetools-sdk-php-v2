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

/**
 * @implements Builder<AttributeSetType>
 */
final class AttributeSetTypeBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?AttributeTypeBuilder|AttributeType
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
     * @return AttributeType|null
     */
    final public function getElementType()
    {
       return ($this->elementType instanceof AttributeTypeBuilder ? $this->elementType->build() : $this->elementType);
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
    final public function withElementType(?AttributeType $elementType)
    {
        $this->elementType = $elementType;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withElementTypeBuilder(?AttributeTypeBuilder $elementType)
    {
        $this->elementType = $elementType;
        
        return $this;
    }
    
    public function build(): AttributeSetType {
        return new AttributeSetTypeModel(
            $this->name,
            ($this->elementType instanceof AttributeTypeBuilder ? $this->elementType->build() : $this->elementType)
        );
    }
    
    public static function of(): AttributeSetTypeBuilder
    {
        return new self();
    }
}