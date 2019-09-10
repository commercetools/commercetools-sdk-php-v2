<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReference;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReferenceBuilder;

/**
 * @implements Builder<DiscountedPrice>
 */
final class DiscountedPriceBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ProductDiscountReferenceBuilder|ProductDiscountReference
     */
    protected $discount;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $value;

    /**
     *
     * @return ProductDiscountReference|null
     */
    final public function getDiscount()
    {
       return ($this->discount instanceof ProductDiscountReferenceBuilder ? $this->discount->build() : $this->discount);
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getValue()
    {
       return ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value);
    }
    /**
     * @return $this
     */
    final public function withDiscount(?ProductDiscountReference $discount)
    {
        $this->discount = $discount;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValue(?Money $value)
    {
        $this->value = $value;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDiscountBuilder(?ProductDiscountReferenceBuilder $discount)
    {
        $this->discount = $discount;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): DiscountedPrice {
        return new DiscountedPriceModel(
            ($this->discount instanceof ProductDiscountReferenceBuilder ? $this->discount->build() : $this->discount),
            ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value)
        );
    }
    
    public static function of(): DiscountedPriceBuilder
    {
        return new self();
    }
}