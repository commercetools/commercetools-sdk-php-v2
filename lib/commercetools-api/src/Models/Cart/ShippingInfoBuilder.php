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
use Commercetools\Api\Models\Order\DeliveryCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReferenceBuilder;
use Commercetools\Api\Models\ShippingMethod\ShippingRate;
use Commercetools\Api\Models\ShippingMethod\ShippingRateBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateBuilder;

/**
 * @implements Builder<ShippingInfo>
 */
final class ShippingInfoBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?TaxRateBuilder|TaxRate
     */
    protected $taxRate;
    
    /**
     * @var ?ShippingRateBuilder|ShippingRate
     */
    protected $shippingRate;
    
    /**
     * @var ?DiscountedLineItemPriceBuilder|DiscountedLineItemPrice
     */
    protected $discountedPrice;
    
    /**
     * @var ?string
     */
    protected $shippingMethodState;
    
    /**
     * @var ?TaxedItemPriceBuilder|TaxedItemPrice
     */
    protected $taxedPrice;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $price;
    
    /**
     * @var ?ShippingMethodReferenceBuilder|ShippingMethodReference
     */
    protected $shippingMethod;
    
    /**
     * @var ?string
     */
    protected $shippingMethodName;
    
    /**
     * @var ?DeliveryCollection
     */
    protected $deliveries;
    
    /**
     * @var ?TaxCategoryReferenceBuilder|TaxCategoryReference
     */
    protected $taxCategory;

    /**
     *
     * @return TaxRate|null
     */
    final public function getTaxRate()
    {
       return ($this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate);
    }
    
    /**
     *
     * @return ShippingRate|null
     */
    final public function getShippingRate()
    {
       return ($this->shippingRate instanceof ShippingRateBuilder ? $this->shippingRate->build() : $this->shippingRate);
    }
    
    /**
     *
     * @return DiscountedLineItemPrice|null
     */
    final public function getDiscountedPrice()
    {
       return ($this->discountedPrice instanceof DiscountedLineItemPriceBuilder ? $this->discountedPrice->build() : $this->discountedPrice);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getShippingMethodState()
    {
       return $this->shippingMethodState;
    }
    
    /**
     *
     * @return TaxedItemPrice|null
     */
    final public function getTaxedPrice()
    {
       return ($this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice);
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getPrice()
    {
       return ($this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price);
    }
    
    /**
     *
     * @return ShippingMethodReference|null
     */
    final public function getShippingMethod()
    {
       return ($this->shippingMethod instanceof ShippingMethodReferenceBuilder ? $this->shippingMethod->build() : $this->shippingMethod);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getShippingMethodName()
    {
       return $this->shippingMethodName;
    }
    
    /**
     *
     * @return DeliveryCollection|null
     */
    final public function getDeliveries()
    {
       return $this->deliveries;
    }
    
    /**
     *
     * @return TaxCategoryReference|null
     */
    final public function getTaxCategory()
    {
       return ($this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory);
    }
    /**
     * @return $this
     */
    final public function withTaxRate(?TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingRate(?ShippingRate $shippingRate)
    {
        $this->shippingRate = $shippingRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDiscountedPrice(?DiscountedLineItemPrice $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingMethodState(?string $shippingMethodState)
    {
        $this->shippingMethodState = $shippingMethodState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxedPrice(?TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPrice(?TypedMoney $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingMethod(?ShippingMethodReference $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingMethodName(?string $shippingMethodName)
    {
        $this->shippingMethodName = $shippingMethodName;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDeliveries(?DeliveryCollection $deliveries)
    {
        $this->deliveries = $deliveries;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCategory(?TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTaxRateBuilder(?TaxRateBuilder $taxRate)
    {
        $this->taxRate = $taxRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingRateBuilder(?ShippingRateBuilder $shippingRate)
    {
        $this->shippingRate = $shippingRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDiscountedPriceBuilder(?DiscountedLineItemPriceBuilder $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxedPriceBuilder(?TaxedItemPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPriceBuilder(?TypedMoneyBuilder $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingMethodBuilder(?ShippingMethodReferenceBuilder $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCategoryBuilder(?TaxCategoryReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    
    public function build(): ShippingInfo {
        return new ShippingInfoModel(
            ($this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate),
            ($this->shippingRate instanceof ShippingRateBuilder ? $this->shippingRate->build() : $this->shippingRate),
            ($this->discountedPrice instanceof DiscountedLineItemPriceBuilder ? $this->discountedPrice->build() : $this->discountedPrice),
            $this->shippingMethodState,
            ($this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice),
            ($this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price),
            ($this->shippingMethod instanceof ShippingMethodReferenceBuilder ? $this->shippingMethod->build() : $this->shippingMethod),
            $this->shippingMethodName,
            $this->deliveries,
            ($this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory)
        );
    }
    
    public static function of(): ShippingInfoBuilder
    {
        return new self();
    }
}