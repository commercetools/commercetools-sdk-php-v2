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
 * @implements Builder<AttributeNestedType>
 */
final class AttributeNestedTypeBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?ProductTypeReferenceBuilder|ProductTypeReference
     */
    protected $typeReference;

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
     * @return ProductTypeReference|null
     */
    final public function getTypeReference()
    {
       return ($this->typeReference instanceof ProductTypeReferenceBuilder ? $this->typeReference->build() : $this->typeReference);
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
    final public function withTypeReference(?ProductTypeReference $typeReference)
    {
        $this->typeReference = $typeReference;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTypeReferenceBuilder(?ProductTypeReferenceBuilder $typeReference)
    {
        $this->typeReference = $typeReference;
        
        return $this;
    }
    
    public function build(): AttributeNestedType {
        return new AttributeNestedTypeModel(
            $this->name,
            ($this->typeReference instanceof ProductTypeReferenceBuilder ? $this->typeReference->build() : $this->typeReference)
        );
    }
    
    public static function of(): AttributeNestedTypeBuilder
    {
        return new self();
    }
}