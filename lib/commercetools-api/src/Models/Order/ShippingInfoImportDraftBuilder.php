<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifier;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodResourceIdentifierBuilder;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraftBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateBuilder;

/**
 * @implements Builder<ShippingInfoImportDraft>
 */
final class ShippingInfoImportDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?TaxRateBuilder|TaxRate
     */
    protected $taxRate;
    
    /**
     * @var ?ShippingRateDraftBuilder|ShippingRateDraft
     */
    protected $shippingRate;
    
    /**
     * @var ?DiscountedLineItemPriceDraftBuilder|DiscountedLineItemPriceDraft
     */
    protected $discountedPrice;
    
    /**
     * @var ?string
     */
    protected $shippingMethodState;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $price;
    
    /**
     * @var ?ShippingMethodResourceIdentifierBuilder|ShippingMethodResourceIdentifier
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
     * @var ?TaxCategoryResourceIdentifierBuilder|TaxCategoryResourceIdentifier
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
     * @return ShippingRateDraft|null
     */
    final public function getShippingRate()
    {
       return ($this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate);
    }
    
    /**
     *
     * @return DiscountedLineItemPriceDraft|null
     */
    final public function getDiscountedPrice()
    {
       return ($this->discountedPrice instanceof DiscountedLineItemPriceDraftBuilder ? $this->discountedPrice->build() : $this->discountedPrice);
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
     * @return Money|null
     */
    final public function getPrice()
    {
       return ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price);
    }
    
    /**
     *
     * @return ShippingMethodResourceIdentifier|null
     */
    final public function getShippingMethod()
    {
       return ($this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod);
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
     * @return TaxCategoryResourceIdentifier|null
     */
    final public function getTaxCategory()
    {
       return ($this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory);
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
    final public function withShippingRate(?ShippingRateDraft $shippingRate)
    {
        $this->shippingRate = $shippingRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDiscountedPrice(?DiscountedLineItemPriceDraft $discountedPrice)
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
    final public function withPrice(?Money $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod)
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
    final public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
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
    final public function withShippingRateBuilder(?ShippingRateDraftBuilder $shippingRate)
    {
        $this->shippingRate = $shippingRate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDiscountedPriceBuilder(?DiscountedLineItemPriceDraftBuilder $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPriceBuilder(?MoneyBuilder $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingMethodBuilder(?ShippingMethodResourceIdentifierBuilder $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    
    public function build(): ShippingInfoImportDraft {
        return new ShippingInfoImportDraftModel(
            ($this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate),
            ($this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate),
            ($this->discountedPrice instanceof DiscountedLineItemPriceDraftBuilder ? $this->discountedPrice->build() : $this->discountedPrice),
            $this->shippingMethodState,
            ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price),
            ($this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod),
            $this->shippingMethodName,
            $this->deliveries,
            ($this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory)
        );
    }
    
    public static function of(): ShippingInfoImportDraftBuilder
    {
        return new self();
    }
}