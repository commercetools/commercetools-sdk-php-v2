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
 * @implements Builder<CartDiscountChangeTargetAction>
 */
final class CartDiscountChangeTargetActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?CartDiscountTargetBuilder|CartDiscountTarget
     */
    protected $target;

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
     * @return CartDiscountTarget|null
     */
    final public function getTarget()
    {
       return ($this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target);
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
    final public function withTarget(?CartDiscountTarget $target)
    {
        $this->target = $target;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTargetBuilder(?CartDiscountTargetBuilder $target)
    {
        $this->target = $target;
        
        return $this;
    }
    
    public function build(): CartDiscountChangeTargetAction {
        return new CartDiscountChangeTargetActionModel(
            $this->action,
            ($this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target)
        );
    }
    
    public static function of(): CartDiscountChangeTargetActionBuilder
    {
        return new self();
    }
}