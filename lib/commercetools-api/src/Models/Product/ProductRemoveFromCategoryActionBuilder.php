<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Category\CategoryResourceIdentifier;
use Commercetools\Api\Models\Category\CategoryResourceIdentifierBuilder;

/**
 * @implements Builder<ProductRemoveFromCategoryAction>
 */
final class ProductRemoveFromCategoryActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?CategoryResourceIdentifierBuilder|CategoryResourceIdentifier
     */
    protected $category;

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
     * @return bool|null
     */
    final public function getStaged()
    {
       return $this->staged;
    }
    
    /**
     *
     * @return CategoryResourceIdentifier|null
     */
    final public function getCategory()
    {
       return ($this->category instanceof CategoryResourceIdentifierBuilder ? $this->category->build() : $this->category);
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
    final public function withStaged(?bool $staged)
    {
        $this->staged = $staged;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCategory(?CategoryResourceIdentifier $category)
    {
        $this->category = $category;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCategoryBuilder(?CategoryResourceIdentifierBuilder $category)
    {
        $this->category = $category;
        
        return $this;
    }
    
    public function build(): ProductRemoveFromCategoryAction {
        return new ProductRemoveFromCategoryActionModel(
            $this->action,
            $this->staged,
            ($this->category instanceof CategoryResourceIdentifierBuilder ? $this->category->build() : $this->category)
        );
    }
    
    public static function of(): ProductRemoveFromCategoryActionBuilder
    {
        return new self();
    }
}