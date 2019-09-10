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
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;

/**
 * @implements Builder<DiscountedLineItemPrice>
 */
final class DiscountedLineItemPriceBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DiscountedLineItemPortionCollection
     */
    protected $includedDiscounts;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $value;

    /**
     *
     * @return DiscountedLineItemPortionCollection|null
     */
    final public function getIncludedDiscounts()
    {
       return $this->includedDiscounts;
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getValue()
    {
       return ($this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value);
    }
    /**
     * @return $this
     */
    final public function withIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts)
    {
        $this->includedDiscounts = $includedDiscounts;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValue(?TypedMoney $value)
    {
        $this->value = $value;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withValueBuilder(?TypedMoneyBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): DiscountedLineItemPrice {
        return new DiscountedLineItemPriceModel(
            $this->includedDiscounts,
            ($this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value)
        );
    }
    
    public static function of(): DiscountedLineItemPriceBuilder
    {
        return new self();
    }
}