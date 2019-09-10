<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\CartDiscount\CartDiscountReference;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;

/**
 * @implements Builder<DiscountedLineItemPortion>
 */
final class DiscountedLineItemPortionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?MoneyBuilder|Money
     */
    protected $discountedAmount;
    
    /**
     * @var ?CartDiscountReferenceBuilder|CartDiscountReference
     */
    protected $discount;

    /**
     *
     * @return Money|null
     */
    final public function getDiscountedAmount()
    {
       return ($this->discountedAmount instanceof MoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount);
    }
    
    /**
     *
     * @return CartDiscountReference|null
     */
    final public function getDiscount()
    {
       return ($this->discount instanceof CartDiscountReferenceBuilder ? $this->discount->build() : $this->discount);
    }
    /**
     * @return $this
     */
    final public function withDiscountedAmount(?Money $discountedAmount)
    {
        $this->discountedAmount = $discountedAmount;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDiscount(?CartDiscountReference $discount)
    {
        $this->discount = $discount;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDiscountedAmountBuilder(?MoneyBuilder $discountedAmount)
    {
        $this->discountedAmount = $discountedAmount;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDiscountBuilder(?CartDiscountReferenceBuilder $discount)
    {
        $this->discount = $discount;
        
        return $this;
    }
    
    public function build(): DiscountedLineItemPortion {
        return new DiscountedLineItemPortionModel(
            ($this->discountedAmount instanceof MoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount),
            ($this->discount instanceof CartDiscountReferenceBuilder ? $this->discount->build() : $this->discount)
        );
    }
    
    public static function of(): DiscountedLineItemPortionBuilder
    {
        return new self();
    }
}