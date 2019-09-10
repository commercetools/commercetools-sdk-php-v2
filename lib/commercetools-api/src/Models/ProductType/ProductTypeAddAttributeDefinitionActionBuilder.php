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
 * @implements Builder<ProductTypeAddAttributeDefinitionAction>
 */
final class ProductTypeAddAttributeDefinitionActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?AttributeDefinitionDraftBuilder|AttributeDefinitionDraft
     */
    protected $attribute;

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
     * @return AttributeDefinitionDraft|null
     */
    final public function getAttribute()
    {
       return ($this->attribute instanceof AttributeDefinitionDraftBuilder ? $this->attribute->build() : $this->attribute);
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
    final public function withAttribute(?AttributeDefinitionDraft $attribute)
    {
        $this->attribute = $attribute;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withAttributeBuilder(?AttributeDefinitionDraftBuilder $attribute)
    {
        $this->attribute = $attribute;
        
        return $this;
    }
    
    public function build(): ProductTypeAddAttributeDefinitionAction {
        return new ProductTypeAddAttributeDefinitionActionModel(
            $this->action,
            ($this->attribute instanceof AttributeDefinitionDraftBuilder ? $this->attribute->build() : $this->attribute)
        );
    }
    
    public static function of(): ProductTypeAddAttributeDefinitionActionBuilder
    {
        return new self();
    }
}