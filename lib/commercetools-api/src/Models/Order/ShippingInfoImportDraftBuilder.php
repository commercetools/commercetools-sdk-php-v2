<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

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
use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingInfoImportDraft>
 */
final class ShippingInfoImportDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $shippingMethodName;

    /**
     * @var Money|?MoneyBuilder
     */
    private $price;

    /**
     * @var ShippingRateDraft|?ShippingRateDraftBuilder
     */
    private $shippingRate;

    /**
     * @var TaxRate|?TaxRateBuilder
     */
    private $taxRate;

    /**
     * @var TaxCategoryResourceIdentifier|?TaxCategoryResourceIdentifierBuilder
     */
    private $taxCategory;

    /**
     * @var ShippingMethodResourceIdentifier|?ShippingMethodResourceIdentifierBuilder
     */
    private $shippingMethod;

    /**
     * @var ?DeliveryCollection
     */
    private $deliveries;

    /**
     * @var DiscountedLineItemPriceDraft|?DiscountedLineItemPriceDraftBuilder
     */
    private $discountedPrice;

    /**
     * @var ?string
     */
    private $shippingMethodState;

    /**
     * @return null|string
     */
    public function getShippingMethodName()
    {
        return $this->shippingMethodName;
    }

    /**
     * @return null|Money
     */
    public function getPrice()
    {
        return $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>The shipping rate used to determine the price.</p>.
     *
     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        return $this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate;
    }

    /**
     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * <p>Not set if custom shipping method is used.</p>.
     *
     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod;
    }

    /**
     * <p>Deliveries are compilations of information on how the articles are being delivered to the customers.</p>.
     *
     * @return null|DeliveryCollection
     */
    public function getDeliveries()
    {
        return $this->deliveries;
    }

    /**
     * @return null|DiscountedLineItemPriceDraft
     */
    public function getDiscountedPrice()
    {
        return $this->discountedPrice instanceof DiscountedLineItemPriceDraftBuilder ? $this->discountedPrice->build() : $this->discountedPrice;
    }

    /**
     * <p>Indicates whether the ShippingMethod referenced is allowed for the cart or not.</p>.
     *
     * @return null|string
     */
    public function getShippingMethodState()
    {
        return $this->shippingMethodState;
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
    public function withPrice(?Money $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRate(?ShippingRateDraft $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
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
    public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

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
    public function withDiscountedPrice(?DiscountedLineItemPriceDraft $discountedPrice)
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
    public function withPriceBuilder(?MoneyBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateBuilder(?ShippingRateDraftBuilder $shippingRate)
    {
        $this->shippingRate = $shippingRate;

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
    public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingMethodBuilder(?ShippingMethodResourceIdentifierBuilder $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountedPriceBuilder(?DiscountedLineItemPriceDraftBuilder $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;

        return $this;
    }

    public function build(): ShippingInfoImportDraft
    {
        return new ShippingInfoImportDraftModel(
            $this->shippingMethodName,
            ($this->price instanceof MoneyBuilder ? $this->price->build() : $this->price),
            ($this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate),
            ($this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate),
            ($this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory),
            ($this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod),
            $this->deliveries,
            ($this->discountedPrice instanceof DiscountedLineItemPriceDraftBuilder ? $this->discountedPrice->build() : $this->discountedPrice),
            $this->shippingMethodState
        );
    }

    public static function of(): ShippingInfoImportDraftBuilder
    {
        return new self();
    }
}
