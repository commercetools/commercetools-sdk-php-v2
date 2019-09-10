<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryChangeParentAction>
 */
final class CategoryChangeParentActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?CategoryResourceIdentifierBuilder|CategoryResourceIdentifier
     */
    protected $parent;

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
     * @return CategoryResourceIdentifier|null
     */
    final public function getParent()
    {
       return ($this->parent instanceof CategoryResourceIdentifierBuilder ? $this->parent->build() : $this->parent);
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
    final public function withParent(?CategoryResourceIdentifier $parent)
    {
        $this->parent = $parent;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withParentBuilder(?CategoryResourceIdentifierBuilder $parent)
    {
        $this->parent = $parent;
        
        return $this;
    }
    
    public function build(): CategoryChangeParentAction {
        return new CategoryChangeParentActionModel(
            $this->action,
            ($this->parent instanceof CategoryResourceIdentifierBuilder ? $this->parent->build() : $this->parent)
        );
    }
    
    public static function of(): CategoryChangeParentActionBuilder
    {
        return new self();
    }
}