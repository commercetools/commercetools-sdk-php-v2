<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\CartDiscount\CartDiscountReference;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;

final class DiscountedLineItemPortionModel extends JsonObjectModel implements DiscountedLineItemPortion
{
    
    public function __construct(
        Money $discountedAmount = null,
        CartDiscountReference $discount = null
    ) {
        $this->discountedAmount = $discountedAmount;
        $this->discount = $discount;
        
    }

    /**
     * @var ?Money
     */
    protected $discountedAmount;
    
    /**
     * @var ?CartDiscountReference
     */
    protected $discount;

    /**
     *
     * @return Money|null
     */
    final public function getDiscountedAmount()
    {
       if (is_null($this->discountedAmount)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DiscountedLineItemPortion::FIELD_DISCOUNTED_AMOUNT);
           if (is_null($data)) {
               return null;
           }
           
           $this->discountedAmount = MoneyModel::of($data);
       }
       return $this->discountedAmount;
    }
    
    /**
     *
     * @return CartDiscountReference|null
     */
    final public function getDiscount()
    {
       if (is_null($this->discount)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DiscountedLineItemPortion::FIELD_DISCOUNT);
           if (is_null($data)) {
               return null;
           }
           
           $this->discount = CartDiscountReferenceModel::of($data);
       }
       return $this->discount;
    }
    final public function setDiscountedAmount(?Money $discountedAmount): void
    {
        $this->discountedAmount = $discountedAmount;
    }
    
    final public function setDiscount(?CartDiscountReference $discount): void
    {
        $this->discount = $discount;
    }
    
}