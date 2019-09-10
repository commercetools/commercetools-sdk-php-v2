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
 * @implements Builder<ProductTypeChangeAttributeOrderByNameAction>
 */
final class ProductTypeChangeAttributeOrderByNameActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?array
     */
    protected $attributeNames;

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
     * @return array|null
     */
    final public function getAttributeNames()
    {
       return $this->attributeNames;
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
    final public function withAttributeNames(?array $attributeNames)
    {
        $this->attributeNames = $attributeNames;
        
        return $this;
    }
    
    public function build(): ProductTypeChangeAttributeOrderByNameAction {
        return new ProductTypeChangeAttributeOrderByNameActionModel(
            $this->action,
            $this->attributeNames
        );
    }
    
    public static function of(): ProductTypeChangeAttributeOrderByNameActionBuilder
    {
        return new self();
    }
}