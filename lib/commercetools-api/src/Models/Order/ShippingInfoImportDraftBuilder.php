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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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

     * @var null|Money|MoneyBuilder
     */
    private $price;

    /**

     * @var null|ShippingRateDraft|ShippingRateDraftBuilder
     */
    private $shippingRate;

    /**

     * @var null|TaxRate|TaxRateBuilder
     */
    private $taxRate;

    /**

     * @var null|TaxCategoryResourceIdentifier|TaxCategoryResourceIdentifierBuilder
     */
    private $taxCategory;

    /**

     * @var null|ShippingMethodResourceIdentifier|ShippingMethodResourceIdentifierBuilder
     */
    private $shippingMethod;

    /**

     * @var ?DeliveryDraftCollection
     */
    private $deliveries;

    /**

     * @var null|DiscountedLineItemPriceDraft|DiscountedLineItemPriceDraftBuilder
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
     * <p>The shipping rate used to determine the price.</p>
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
     * <p>Not set if custom shipping method is used.</p>
     *

     * @return null|ShippingMethodResourceIdentifier
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod;
    }

    /**
     * <p>Deliveries are compilations of information on how the articles are being delivered to the customers.</p>
     *

     * @return null|DeliveryDraftCollection
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
     * <p>Indicates whether the ShippingMethod referenced is allowed for the cart or not.</p>
     *

     * @return null|string
     */
    public function getShippingMethodState()
    {
        return $this->shippingMethodState;
    }

    /**
     * @param ?string $shippingMethodName
     * @return $this
     */
    public function withShippingMethodName(?string $shippingMethodName)
    {
        $this->shippingMethodName = $shippingMethodName;

        return $this;
    }

    /**
     * @param ?Money $price
     * @return $this
     */
    public function withPrice(?Money $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param ?ShippingRateDraft $shippingRate
     * @return $this
     */
    public function withShippingRate(?ShippingRateDraft $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }

    /**
     * @param ?TaxRate $taxRate
     * @return $this
     */
    public function withTaxRate(?TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @param ?ShippingMethodResourceIdentifier $shippingMethod
     * @return $this
     */
    public function withShippingMethod(?ShippingMethodResourceIdentifier $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @param ?DeliveryDraftCollection $deliveries
     * @return $this
     */
    public function withDeliveries(?DeliveryDraftCollection $deliveries)
    {
        $this->deliveries = $deliveries;

        return $this;
    }

    /**
     * @param ?DiscountedLineItemPriceDraft $discountedPrice
     * @return $this
     */
    public function withDiscountedPrice(?DiscountedLineItemPriceDraft $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;

        return $this;
    }

    /**
     * @param ?string $shippingMethodState
     * @return $this
     */
    public function withShippingMethodState(?string $shippingMethodState)
    {
        $this->shippingMethodState = $shippingMethodState;

        return $this;
    }

    /**
     * @deprecated use withPrice() instead
     * @return $this
     */
    public function withPriceBuilder(?MoneyBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @deprecated use withShippingRate() instead
     * @return $this
     */
    public function withShippingRateBuilder(?ShippingRateDraftBuilder $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }

    /**
     * @deprecated use withTaxRate() instead
     * @return $this
     */
    public function withTaxRateBuilder(?TaxRateBuilder $taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @deprecated use withTaxCategory() instead
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @deprecated use withShippingMethod() instead
     * @return $this
     */
    public function withShippingMethodBuilder(?ShippingMethodResourceIdentifierBuilder $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @deprecated use withDiscountedPrice() instead
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
            $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price,
            $this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate,
            $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate,
            $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->shippingMethod instanceof ShippingMethodResourceIdentifierBuilder ? $this->shippingMethod->build() : $this->shippingMethod,
            $this->deliveries,
            $this->discountedPrice instanceof DiscountedLineItemPriceDraftBuilder ? $this->discountedPrice->build() : $this->discountedPrice,
            $this->shippingMethodState
        );
    }

    public static function of(): ShippingInfoImportDraftBuilder
    {
        return new self();
    }
}
