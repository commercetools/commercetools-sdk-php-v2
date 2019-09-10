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
 * @implements Builder<CartDiscountChangeStackingModeAction>
 */
final class CartDiscountChangeStackingModeActionBuilder implements Builder
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
    protected $stackingMode;

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
    final public function getStackingMode()
    {
       return $this->stackingMode;
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
    final public function withStackingMode(?string $stackingMode)
    {
        $this->stackingMode = $stackingMode;
        
        return $this;
    }
    
    public function build(): CartDiscountChangeStackingModeAction {
        return new CartDiscountChangeStackingModeActionModel(
            $this->action,
            $this->stackingMode
        );
    }
    
    public static function of(): CartDiscountChangeStackingModeActionBuilder
    {
        return new self();
    }
}