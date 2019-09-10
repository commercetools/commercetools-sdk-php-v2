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

/**
 * @implements Builder<ProductSetCategoryOrderHintAction>
 */
final class ProductSetCategoryOrderHintActionBuilder implements Builder
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
    protected $orderHint;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?string
     */
    protected $categoryId;

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
    final public function getOrderHint()
    {
       return $this->orderHint;
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
     * @return string|null
     */
    final public function getCategoryId()
    {
       return $this->categoryId;
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
    final public function withOrderHint(?string $orderHint)
    {
        $this->orderHint = $orderHint;
        
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
    final public function withCategoryId(?string $categoryId)
    {
        $this->categoryId = $categoryId;
        
        return $this;
    }
    
    public function build(): ProductSetCategoryOrderHintAction {
        return new ProductSetCategoryOrderHintActionModel(
            $this->action,
            $this->orderHint,
            $this->staged,
            $this->categoryId
        );
    }
    
    public static function of(): ProductSetCategoryOrderHintActionBuilder
    {
        return new self();
    }
}