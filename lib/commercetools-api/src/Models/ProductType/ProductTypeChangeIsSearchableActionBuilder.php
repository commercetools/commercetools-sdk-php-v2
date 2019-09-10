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
 * @implements Builder<ProductTypeChangeIsSearchableAction>
 */
final class ProductTypeChangeIsSearchableActionBuilder implements Builder
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
     * @var ?bool
     */
    protected $isSearchable;

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
     * @return bool|null
     */
    final public function getIsSearchable()
    {
       return $this->isSearchable;
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
    final public function withIsSearchable(?bool $isSearchable)
    {
        $this->isSearchable = $isSearchable;
        
        return $this;
    }
    
    public function build(): ProductTypeChangeIsSearchableAction {
        return new ProductTypeChangeIsSearchableActionModel(
            $this->action,
            $this->attributeName,
            $this->isSearchable
        );
    }
    
    public static function of(): ProductTypeChangeIsSearchableActionBuilder
    {
        return new self();
    }
}