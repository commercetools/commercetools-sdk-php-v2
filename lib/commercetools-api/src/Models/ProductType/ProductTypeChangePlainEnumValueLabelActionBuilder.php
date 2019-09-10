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
 * @implements Builder<ProductTypeChangePlainEnumValueLabelAction>
 */
final class ProductTypeChangePlainEnumValueLabelActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?AttributePlainEnumValueBuilder|AttributePlainEnumValue
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
       return $this->action;
    }
    
    /**
     *
     * @return AttributePlainEnumValue|null
     */
    final public function getNewValue()
    {
       return ($this->newValue instanceof AttributePlainEnumValueBuilder ? $this->newValue->build() : $this->newValue);
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
    final public function withNewValue(?AttributePlainEnumValue $newValue)
    {
        $this->newValue = $newValue;
        
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
    final public function withNewValueBuilder(?AttributePlainEnumValueBuilder $newValue)
    {
        $this->newValue = $newValue;
        
        return $this;
    }
    
    public function build(): ProductTypeChangePlainEnumValueLabelAction {
        return new ProductTypeChangePlainEnumValueLabelActionModel(
            $this->action,
            ($this->newValue instanceof AttributePlainEnumValueBuilder ? $this->newValue->build() : $this->newValue),
            $this->attributeName
        );
    }
    
    public static function of(): ProductTypeChangePlainEnumValueLabelActionBuilder
    {
        return new self();
    }
}