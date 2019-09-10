<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductDiscountChangeSortOrderAction>
 */
final class ProductDiscountChangeSortOrderActionBuilder implements Builder
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
    protected $sortOrder;

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
    final public function getSortOrder()
    {
       return $this->sortOrder;
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
    final public function withSortOrder(?string $sortOrder)
    {
        $this->sortOrder = $sortOrder;
        
        return $this;
    }
    
    public function build(): ProductDiscountChangeSortOrderAction {
        return new ProductDiscountChangeSortOrderActionModel(
            $this->action,
            $this->sortOrder
        );
    }
    
    public static function of(): ProductDiscountChangeSortOrderActionBuilder
    {
        return new self();
    }
}