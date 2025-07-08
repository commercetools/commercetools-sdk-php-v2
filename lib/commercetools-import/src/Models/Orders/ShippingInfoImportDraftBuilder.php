<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ShippingMethodKeyReference;
use Commercetools\Import\Models\Common\ShippingMethodKeyReferenceBuilder;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;
use Commercetools\Import\Models\Common\TaxCategoryKeyReferenceBuilder;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Common\TypedMoneyBuilder;
use Commercetools\Import\Models\Prices\TaxRate;
use Commercetools\Import\Models\Prices\TaxRateBuilder;
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

     * @var null|TypedMoney|TypedMoneyBuilder
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

     * @var null|TaxCategoryKeyReference|TaxCategoryKeyReferenceBuilder
     */
    private $taxCategory;

    /**

     * @var null|ShippingMethodKeyReference|ShippingMethodKeyReferenceBuilder
     */
    private $shippingMethod;

    /**

     * @var ?DeliveryCollection
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
     * <p>Maps to <code>shippingInfo.shippingMethodName</code>.</p>
     *

     * @return null|string
     */
    public function getShippingMethodName()
    {
        return $this->shippingMethodName;
    }

    /**
     * <p>Maps to <code>shippingInfo.price</code>.</p>
     *

     * @return null|TypedMoney
     */
    public function getPrice()
    {
        return $this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>Used to determine the price.</p>
     *

     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        return $this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate;
    }

    /**
     * <p>Maps to <code>shippingInfo.taxRate</code>.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        return $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate;
    }

    /**
     * <p>Maps to <code>shippingInfo.taxCategory</code>. If the referenced <a href="ctp:api:type:TaxCategory">TaxCategory</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced TaxCategory is created.</p>
     *

     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryKeyReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * <p>Maps to <code>shippingInfo.shippingMethod</code>. If the referenced <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced ShippingMethod is created.</p>
     *

     * @return null|ShippingMethodKeyReference
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod instanceof ShippingMethodKeyReferenceBuilder ? $this->shippingMethod->build() : $this->shippingMethod;
    }

    /**
     * <p>Maps to <code>shippingInfo.deliveries</code>. You cannot add a <code>DeliveryItem</code> on import, as <code>LineItems</code> and <code>CustomLineItems</code> are not yet referenceable by an <code>id</code>.</p>
     *

     * @return null|DeliveryCollection
     */
    public function getDeliveries()
    {
        return $this->deliveries;
    }

    /**
     * <p>Maps to <code>shippingInfo.discountedPrice</code>.</p>
     *

     * @return null|DiscountedLineItemPriceDraft
     */
    public function getDiscountedPrice()
    {
        return $this->discountedPrice instanceof DiscountedLineItemPriceDraftBuilder ? $this->discountedPrice->build() : $this->discountedPrice;
    }

    /**
     * <p>Maps to <code>shippingInfo.shippingMethodState</code>.</p>
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
     * @param ?TypedMoney $price
     * @return $this
     */
    public function withPrice(?TypedMoney $price)
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
     * @param ?TaxCategoryKeyReference $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryKeyReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @param ?ShippingMethodKeyReference $shippingMethod
     * @return $this
     */
    public function withShippingMethod(?ShippingMethodKeyReference $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * @param ?DeliveryCollection $deliveries
     * @return $this
     */
    public function withDeliveries(?DeliveryCollection $deliveries)
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
    public function withPriceBuilder(?TypedMoneyBuilder $price)
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
    public function withTaxCategoryBuilder(?TaxCategoryKeyReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @deprecated use withShippingMethod() instead
     * @return $this
     */
    public function withShippingMethodBuilder(?ShippingMethodKeyReferenceBuilder $shippingMethod)
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
            $this->price instanceof TypedMoneyBuilder ? $this->price->build() : $this->price,
            $this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate,
            $this->taxRate instanceof TaxRateBuilder ? $this->taxRate->build() : $this->taxRate,
            $this->taxCategory instanceof TaxCategoryKeyReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->shippingMethod instanceof ShippingMethodKeyReferenceBuilder ? $this->shippingMethod->build() : $this->shippingMethod,
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
