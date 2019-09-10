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
 * @implements Builder<ProductTypeChangeAttributeOrderAction>
 */
final class ProductTypeChangeAttributeOrderActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?AttributeDefinitionCollection
     */
    protected $attributes;

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
     * @return AttributeDefinitionCollection|null
     */
    final public function getAttributes()
    {
       return $this->attributes;
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
    final public function withAttributes(?AttributeDefinitionCollection $attributes)
    {
        $this->attributes = $attributes;
        
        return $this;
    }
    
    public function build(): ProductTypeChangeAttributeOrderAction {
        return new ProductTypeChangeAttributeOrderActionModel(
            $this->action,
            $this->attributes
        );
    }
    
    public static function of(): ProductTypeChangeAttributeOrderActionBuilder
    {
        return new self();
    }
}