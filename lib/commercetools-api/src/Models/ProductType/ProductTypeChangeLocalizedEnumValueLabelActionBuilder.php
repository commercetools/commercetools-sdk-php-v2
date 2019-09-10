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
 * @implements Builder<ProductTypeChangeLocalizedEnumValueLabelAction>
 */
final class ProductTypeChangeLocalizedEnumValueLabelActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?AttributeLocalizedEnumValueBuilder|AttributeLocalizedEnumValue
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
     * @return AttributeLocalizedEnumValue|null
     */
    final public function getNewValue()
    {
       return ($this->newValue instanceof AttributeLocalizedEnumValueBuilder ? $this->newValue->build() : $this->newValue);
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
    final public function withNewValue(?AttributeLocalizedEnumValue $newValue)
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
    final public function withNewValueBuilder(?AttributeLocalizedEnumValueBuilder $newValue)
    {
        $this->newValue = $newValue;
        
        return $this;
    }
    
    public function build(): ProductTypeChangeLocalizedEnumValueLabelAction {
        return new ProductTypeChangeLocalizedEnumValueLabelActionModel(
            $this->action,
            ($this->newValue instanceof AttributeLocalizedEnumValueBuilder ? $this->newValue->build() : $this->newValue),
            $this->attributeName
        );
    }
    
    public static function of(): ProductTypeChangeLocalizedEnumValueLabelActionBuilder
    {
        return new self();
    }
}