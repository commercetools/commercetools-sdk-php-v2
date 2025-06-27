<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierBuilder;
use Commercetools\Api\Models\Cart\TaxedPriceDraft;
use Commercetools\Api\Models\Cart\TaxedPriceDraftBuilder;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressBuilder;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<OrderImportDraft>
 */
final class OrderImportDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $orderNumber;

    /**

     * @var ?string
     */
    private $purchaseOrderNumber;

    /**

     * @var ?string
     */
    private $customerId;

    /**

     * @var ?string
     */
    private $customerEmail;

    /**

     * @var null|CustomerGroupResourceIdentifier|CustomerGroupResourceIdentifierBuilder
     */
    private $customerGroup;

    /**

     * @var null|BusinessUnitResourceIdentifier|BusinessUnitResourceIdentifierBuilder
     */
    private $businessUnit;

    /**

     * @var null|StoreResourceIdentifier|StoreResourceIdentifierBuilder
     */
    private $store;

    /**

     * @var ?LineItemImportDraftCollection
     */
    private $lineItems;

    /**

     * @var ?CustomLineItemImportDraftCollection
     */
    private $customLineItems;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $totalPrice;

    /**

     * @var null|TaxedPriceDraft|TaxedPriceDraftBuilder
     */
    private $taxedPrice;

    /**

     * @var ?string
     */
    private $priceRoundingMode;

    /**

     * @var ?string
     */
    private $taxRoundingMode;

    /**

     * @var ?string
     */
    private $taxCalculationMode;

    /**

     * @var ?string
     */
    private $inventoryMode;

    /**

     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $billingAddress;

    /**

     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $shippingAddress;

    /**

     * @var ?BaseAddressCollection
     */
    private $itemShippingAddresses;

    /**

     * @var null|ShippingInfoImportDraft|ShippingInfoImportDraftBuilder
     */
    private $shippingInfo;

    /**

     * @var null|PaymentInfo|PaymentInfoBuilder
     */
    private $paymentInfo;

    /**

     * @var ?string
     */
    private $paymentState;

    /**

     * @var ?string
     */
    private $shipmentState;

    /**

     * @var ?string
     */
    private $orderState;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $state;

    /**

     * @var ?string
     */
    private $country;

    /**

     * @var ?string
     */
    private $origin;

    /**

     * @var ?DateTimeImmutable
     */
    private $completedAt;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>User-defined identifier of the Order. Must be unique across a Project.
     * Once set, the value cannot be changed.</p>
     *

     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * <p>User-defined identifier for a purchase Order.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> the Order belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * <p>The Email address of the Customer the Order belongs to. Can be used instead of <code>customerId</code> when no check against existing <a href="ctp:api:type:Customer">Customers</a> is required.</p>
     *

     * @return null|string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * <p>The Customer Group of the Customer the Order belongs to.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Business Unit the Order should belong to.
     * When the <code>customerId</code> of the Order is also set, the <a href="ctp:api:type:Customer">Customer</a> must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit. Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * <p>The Store the Order belongs to.
     * Used for <a href="#filtering">filtering</a>.</p>
     * <p>If a <a href="ctp:api:type:LineItemImportDraft">LineItemImportDraft</a> or a <a href="ctp:api:type:CustomLineItemImportDraft">CustomLineItemImportDraft</a> specifies a <code>distributionChannel</code> or a <code>supplyChannel</code> that is not defined for the referenced Store, the Order Import gets rejected.
     * The same applies when the provided <code>country</code> is not defined for the referenced Store.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        return $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store;
    }

    /**
     * <p><a href="ctp:api:type:LineItems">Line Items</a> to add to the Order.</p>
     * <p>If not specified, <code>customLineItems</code> must not be empty.</p>
     *

     * @return null|LineItemImportDraftCollection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * <p><a href="ctp:api:type:CustomLineItems">Custom Line Items</a> to add to the Cart.</p>
     * <p>If not specified, <code>lineItems</code> must not be empty.</p>
     *

     * @return null|CustomLineItemImportDraftCollection
     */
    public function getCustomLineItems()
    {
        return $this->customLineItems;
    }

    /**
     * <p>The total Price of the Order. The amount can be negative.</p>
     *

     * @return null|Money
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * <p>Include TaxedPrice information for the Order. If not included, and if you have Tax Rates set for Line Items and Custom Line Items, the Order total will not be recalculated.</p>
     *

     * @return null|TaxedPriceDraft
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedPriceDraftBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
    }

    /**
     * <p>Determines how the total prices on <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a> are rounded when calculated.</p>
     *

     * @return null|string
     */
    public function getPriceRoundingMode()
    {
        return $this->priceRoundingMode;
    }

    /**
     * <p>Determines how monetary values are rounded when calculating taxes for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        return $this->taxRoundingMode;
    }

    /**
     * <p>Determines how taxes are calculated for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxCalculationMode()
    {
        return $this->taxCalculationMode;
    }

    /**
     * <p>Determines how stock quantities are tracked for Line Items in the Cart.</p>
     *

     * @return null|string
     */
    public function getInventoryMode()
    {
        return $this->inventoryMode;
    }

    /**
     * <p>Billing address associated with the Order.</p>
     *

     * @return null|BaseAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress instanceof BaseAddressBuilder ? $this->billingAddress->build() : $this->billingAddress;
    }

    /**
     * <p>Shipping address associated with the Order.</p>
     *

     * @return null|BaseAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress instanceof BaseAddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress;
    }

    /**
     * <p>Addresses for Orders with multiple shipping addresses. Addresses must include a value for <code>key</code>.</p>
     *

     * @return null|BaseAddressCollection
     */
    public function getItemShippingAddresses()
    {
        return $this->itemShippingAddresses;
    }

    /**
     * <p>Shipping-related information of the Order.</p>
     *

     * @return null|ShippingInfoImportDraft
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo instanceof ShippingInfoImportDraftBuilder ? $this->shippingInfo->build() : $this->shippingInfo;
    }

    /**
     * <p>Payment information associated with the Order.</p>
     *

     * @return null|PaymentInfo
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo instanceof PaymentInfoBuilder ? $this->paymentInfo->build() : $this->paymentInfo;
    }

    /**
     * <p>Payment status of the Order.</p>
     *

     * @return null|string
     */
    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * <p>Shipment status of the Order.</p>
     *

     * @return null|string
     */
    public function getShipmentState()
    {
        return $this->shipmentState;
    }

    /**
     * <p>Current status of the Order.</p>
     *

     * @return null|string
     */
    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * <p>State of the Order in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>Include a value to associate a country with the Order.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>Indicates the origin of the Order.</p>
     *

     * @return null|string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * <p>User-defined date and time for the Order. This value does not influence the <code>createdAt</code> or <code>lastModifiedAt</code> values of the Order created by the Order Import.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    /**
     * <p>Custom Fields for the Order.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $orderNumber
     * @return $this
     */
    public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @param ?string $purchaseOrderNumber
     * @return $this
     */
    public function withPurchaseOrderNumber(?string $purchaseOrderNumber)
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;

        return $this;
    }

    /**
     * @param ?string $customerId
     * @return $this
     */
    public function withCustomerId(?string $customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @param ?string $customerEmail
     * @return $this
     */
    public function withCustomerEmail(?string $customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @param ?StoreResourceIdentifier $store
     * @return $this
     */
    public function withStore(?StoreResourceIdentifier $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @param ?LineItemImportDraftCollection $lineItems
     * @return $this
     */
    public function withLineItems(?LineItemImportDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @param ?CustomLineItemImportDraftCollection $customLineItems
     * @return $this
     */
    public function withCustomLineItems(?CustomLineItemImportDraftCollection $customLineItems)
    {
        $this->customLineItems = $customLineItems;

        return $this;
    }

    /**
     * @param ?Money $totalPrice
     * @return $this
     */
    public function withTotalPrice(?Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @param ?TaxedPriceDraft $taxedPrice
     * @return $this
     */
    public function withTaxedPrice(?TaxedPriceDraft $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @param ?string $priceRoundingMode
     * @return $this
     */
    public function withPriceRoundingMode(?string $priceRoundingMode)
    {
        $this->priceRoundingMode = $priceRoundingMode;

        return $this;
    }

    /**
     * @param ?string $taxRoundingMode
     * @return $this
     */
    public function withTaxRoundingMode(?string $taxRoundingMode)
    {
        $this->taxRoundingMode = $taxRoundingMode;

        return $this;
    }

    /**
     * @param ?string $taxCalculationMode
     * @return $this
     */
    public function withTaxCalculationMode(?string $taxCalculationMode)
    {
        $this->taxCalculationMode = $taxCalculationMode;

        return $this;
    }

    /**
     * @param ?string $inventoryMode
     * @return $this
     */
    public function withInventoryMode(?string $inventoryMode)
    {
        $this->inventoryMode = $inventoryMode;

        return $this;
    }

    /**
     * @param ?BaseAddress $billingAddress
     * @return $this
     */
    public function withBillingAddress(?BaseAddress $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @param ?BaseAddress $shippingAddress
     * @return $this
     */
    public function withShippingAddress(?BaseAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @param ?BaseAddressCollection $itemShippingAddresses
     * @return $this
     */
    public function withItemShippingAddresses(?BaseAddressCollection $itemShippingAddresses)
    {
        $this->itemShippingAddresses = $itemShippingAddresses;

        return $this;
    }

    /**
     * @param ?ShippingInfoImportDraft $shippingInfo
     * @return $this
     */
    public function withShippingInfo(?ShippingInfoImportDraft $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @param ?PaymentInfo $paymentInfo
     * @return $this
     */
    public function withPaymentInfo(?PaymentInfo $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * @param ?string $paymentState
     * @return $this
     */
    public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;

        return $this;
    }

    /**
     * @param ?string $shipmentState
     * @return $this
     */
    public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;

        return $this;
    }

    /**
     * @param ?string $orderState
     * @return $this
     */
    public function withOrderState(?string $orderState)
    {
        $this->orderState = $orderState;

        return $this;
    }

    /**
     * @param ?StateReference $state
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param ?string $origin
     * @return $this
     */
    public function withOrigin(?string $origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $completedAt
     * @return $this
     */
    public function withCompletedAt(?DateTimeImmutable $completedAt)
    {
        $this->completedAt = $completedAt;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroup() instead
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitResourceIdentifierBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withStore() instead
     * @return $this
     */
    public function withStoreBuilder(?StoreResourceIdentifierBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @deprecated use withTotalPrice() instead
     * @return $this
     */
    public function withTotalPriceBuilder(?MoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @deprecated use withTaxedPrice() instead
     * @return $this
     */
    public function withTaxedPriceBuilder(?TaxedPriceDraftBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @deprecated use withBillingAddress() instead
     * @return $this
     */
    public function withBillingAddressBuilder(?BaseAddressBuilder $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @deprecated use withShippingAddress() instead
     * @return $this
     */
    public function withShippingAddressBuilder(?BaseAddressBuilder $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @deprecated use withShippingInfo() instead
     * @return $this
     */
    public function withShippingInfoBuilder(?ShippingInfoImportDraftBuilder $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @deprecated use withPaymentInfo() instead
     * @return $this
     */
    public function withPaymentInfoBuilder(?PaymentInfoBuilder $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): OrderImportDraft
    {
        return new OrderImportDraftModel(
            $this->orderNumber,
            $this->purchaseOrderNumber,
            $this->customerId,
            $this->customerEmail,
            $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit,
            $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store,
            $this->lineItems,
            $this->customLineItems,
            $this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice,
            $this->taxedPrice instanceof TaxedPriceDraftBuilder ? $this->taxedPrice->build() : $this->taxedPrice,
            $this->priceRoundingMode,
            $this->taxRoundingMode,
            $this->taxCalculationMode,
            $this->inventoryMode,
            $this->billingAddress instanceof BaseAddressBuilder ? $this->billingAddress->build() : $this->billingAddress,
            $this->shippingAddress instanceof BaseAddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress,
            $this->itemShippingAddresses,
            $this->shippingInfo instanceof ShippingInfoImportDraftBuilder ? $this->shippingInfo->build() : $this->shippingInfo,
            $this->paymentInfo instanceof PaymentInfoBuilder ? $this->paymentInfo->build() : $this->paymentInfo,
            $this->paymentState,
            $this->shipmentState,
            $this->orderState,
            $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state,
            $this->country,
            $this->origin,
            $this->completedAt,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): OrderImportDraftBuilder
    {
        return new self();
    }
}
