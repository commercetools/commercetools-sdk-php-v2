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
 * @implements Builder<ProductDiscountChangeValueAction>
 */
final class ProductDiscountChangeValueActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ProductDiscountValueBuilder|ProductDiscountValue
     */
    protected $value;

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
     * @return ProductDiscountValue|null
     */
    final public function getValue()
    {
       return ($this->value instanceof ProductDiscountValueBuilder ? $this->value->build() : $this->value);
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
    final public function withValue(?ProductDiscountValue $value)
    {
        $this->value = $value;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withValueBuilder(?ProductDiscountValueBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): ProductDiscountChangeValueAction {
        return new ProductDiscountChangeValueActionModel(
            $this->action,
            ($this->value instanceof ProductDiscountValueBuilder ? $this->value->build() : $this->value)
        );
    }
    
    public static function of(): ProductDiscountChangeValueActionBuilder
    {
        return new self();
    }
}