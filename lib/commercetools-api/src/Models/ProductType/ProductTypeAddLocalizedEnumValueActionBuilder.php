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
 * @implements Builder<ProductTypeAddLocalizedEnumValueAction>
 */
final class ProductTypeAddLocalizedEnumValueActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $attributeName;
    
    /**
     * @var ?AttributeLocalizedEnumValueBuilder|AttributeLocalizedEnumValue
     */
    protected $value;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAttributeName()
    {
       return $this->attributeName;
    }
    
    /**
     *
     * @return AttributeLocalizedEnumValue|null
     */
    final public function getValue()
    {
       return ($this->value instanceof AttributeLocalizedEnumValueBuilder ? $this->value->build() : $this->value);
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValue(?AttributeLocalizedEnumValue $value)
    {
        $this->value = $value;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withValueBuilder(?AttributeLocalizedEnumValueBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): ProductTypeAddLocalizedEnumValueAction {
        return new ProductTypeAddLocalizedEnumValueActionModel(
            $this->action,
            $this->attributeName,
            ($this->value instanceof AttributeLocalizedEnumValueBuilder ? $this->value->build() : $this->value)
        );
    }
    
    public static function of(): ProductTypeAddLocalizedEnumValueActionBuilder
    {
        return new self();
    }
}