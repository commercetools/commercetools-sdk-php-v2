<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierCollection;

/**
 * @implements Builder<DiscountCodeChangeCartDiscountsAction>
 */
final class DiscountCodeChangeCartDiscountsActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?CartDiscountResourceIdentifierCollection
     */
    protected $cartDiscounts;

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
     * @return CartDiscountResourceIdentifierCollection|null
     */
    final public function getCartDiscounts()
    {
       return $this->cartDiscounts;
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
    final public function withCartDiscounts(?CartDiscountResourceIdentifierCollection $cartDiscounts)
    {
        $this->cartDiscounts = $cartDiscounts;
        
        return $this;
    }
    
    public function build(): DiscountCodeChangeCartDiscountsAction {
        return new DiscountCodeChangeCartDiscountsActionModel(
            $this->action,
            $this->cartDiscounts
        );
    }
    
    public static function of(): DiscountCodeChangeCartDiscountsActionBuilder
    {
        return new self();
    }
}