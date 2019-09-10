<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountChangeValueAction>
 */
final class CartDiscountChangeValueActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?CartDiscountValueBuilder|CartDiscountValue
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
     * @return CartDiscountValue|null
     */
    final public function getValue()
    {
       return ($this->value instanceof CartDiscountValueBuilder ? $this->value->build() : $this->value);
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
    final public function withValue(?CartDiscountValue $value)
    {
        $this->value = $value;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withValueBuilder(?CartDiscountValueBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): CartDiscountChangeValueAction {
        return new CartDiscountChangeValueActionModel(
            $this->action,
            ($this->value instanceof CartDiscountValueBuilder ? $this->value->build() : $this->value)
        );
    }
    
    public static function of(): CartDiscountChangeValueActionBuilder
    {
        return new self();
    }
}