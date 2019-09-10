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
 * @implements Builder<CartDiscountChangeIsActiveAction>
 */
final class CartDiscountChangeIsActiveActionBuilder implements Builder
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
    protected $isActive;

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
    final public function getIsActive()
    {
       return $this->isActive;
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
    final public function withIsActive(?bool $isActive)
    {
        $this->isActive = $isActive;
        
        return $this;
    }
    
    public function build(): CartDiscountChangeIsActiveAction {
        return new CartDiscountChangeIsActiveActionModel(
            $this->action,
            $this->isActive
        );
    }
    
    public static function of(): CartDiscountChangeIsActiveActionBuilder
    {
        return new self();
    }
}