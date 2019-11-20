<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

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
use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingInfo>
 */
final class ShippingInfoBuilder implements Builder
{
    /**
     * @var TaxRate|?TaxRateBuilder
     */
    private $taxRate;

    /**
     * @var ShippingRate|?ShippingRateBuilder
     */
    private $shippingRate;

    /**
     * @var DiscountedLineItemPrice|?DiscountedLineItemPriceBuilder
     */
    private $discountedPrice;

    /**
     * @var ?string
     */
    private $shippingMethodState;

    /**
     * @var TaxedItemPrice|?TaxedItemPriceBuilder
     */
    private $taxedPrice;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $price;

    /**
     * @var ShippingMethodReference|?ShippingMethodReferenceBuilder
     */
    private $shippingMethod;

    /**
     * @var ?string
     */
    private $shippingMethodName;

    /**
     * @var ?DeliveryCollection
     */
    private $deliveries;

    /**
     * @var TaxCategoryReference|?TaxCategoryReferenceBuilder
     */
    private $taxCategory;

    /**
     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * @return null|ShippingRate
     */
    public function getShippingRate()
    {
        return $this->shippingRate instanceof ShippingRateBuilder ? $this->shippingRate->build() : $this->shippingRate;
    }

    /**
     * @return null|DiscountedLineItemPrice
     */
    public function getDiscountedPrice()
    {
        return $this->discountedPrice instanceof DiscountedLineItemPriceBuilder ? $this->discountedPrice->build() : $this->discountedPrice;
    }

    /**
     * @return null|string
     */
    public function getShippingMethodState()
    {
        return $this->shippingMethodState;
    }

    /**
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
    }

    /**
     * @return null|TypedMoney
     */
    public function getPrice()
    {
        return $this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return null|ShippingMethodReference
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod instanceof ShippingMethodReferenceBuilder ? $this->shippingMethod->build() : $this->shippingMethod;
    }

    /**
     * @return null|string
     */
    public function getShippingMethodName()
    {
        return $this->shippingMethodName;
    }

    /**
     * @return null|DeliveryCollection
     */
    public function getDeliveries()
    {
        return $this->deliveries;
    }

    /**
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * @return $this
     */
    public function withTaxRate(?TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRate(?ShippingRate $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountedPrice(?DiscountedLineItemPrice $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingMethodState(?string $shippingMethodState)
    {
        $this->shippingMethodState = $shippingMethodState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxedPrice(?TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrice(?TypedMoney $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingMethod(?ShippingMethodReference $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingMethodName(?string $shippingMethodName)
    {
        $this->shippingMethodName = $shippingMethodName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDeliveries(?DeliveryCollection $deliveries)
    {
        $this->deliveries = $deliveries;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxRateBuilder(?TaxRateBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateBuilder(?ShippingRateBuilder $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountedPriceBuilder(?DiscountedLineItemPriceBuilder $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxedPriceBuilder(?TaxedItemPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceBuilder(?TypedMoneyBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingMethodBuilder(?ShippingMethodReferenceBuilder $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    public function build(): ShippingInfo
    {
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
