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
 * @implements Builder<ProductTypeChangePlainEnumValueOrderAction>
 */
final class ProductTypeChangePlainEnumValueOrderActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?AttributePlainEnumValueCollection
     */
    protected $values;
    
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
     * @return AttributePlainEnumValueCollection|null
     */
    final public function getValues()
    {
       return $this->values;
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
    final public function withValues(?AttributePlainEnumValueCollection $values)
    {
        $this->values = $values;
        
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
    
    public function build(): ProductTypeChangePlainEnumValueOrderAction {
        return new ProductTypeChangePlainEnumValueOrderActionModel(
            $this->action,
            $this->values,
            $this->attributeName
        );
    }
    
    public static function of(): ProductTypeChangePlainEnumValueOrderActionBuilder
    {
        return new self();
    }
}