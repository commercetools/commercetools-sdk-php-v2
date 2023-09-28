<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceBuilder;
use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceBuilder;
use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DirectDiscountCollection;
use Commercetools\Api\Models\Cart\DiscountCodeInfoCollection;
use Commercetools\Api\Models\Cart\DiscountOnTotalPrice;
use Commercetools\Api\Models\Cart\DiscountOnTotalPriceBuilder;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingInfoBuilder;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\ShippingRateInputBuilder;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Cart\TaxedPriceBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderBuilder;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Order\PaymentInfoBuilder;
use Commercetools\Api\Models\Order\ReturnInfoCollection;
use Commercetools\Api\Models\Order\SyncInfoCollection;
use Commercetools\Api\Models\Quote\QuoteReference;
use Commercetools\Api\Models\Quote\QuoteReferenceBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<StagedOrder>
 */
final class StagedOrderBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

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

     * @var null|CustomerGroupReference|CustomerGroupReferenceBuilder
     */
    private $customerGroup;

    /**

     * @var ?string
     */
    private $anonymousId;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $businessUnit;

    /**

     * @var null|StoreKeyReference|StoreKeyReferenceBuilder
     */
    private $store;

    /**

     * @var ?LineItemCollection
     */
    private $lineItems;

    /**

     * @var ?CustomLineItemCollection
     */
    private $customLineItems;

    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $totalPrice;

    /**

     * @var null|TaxedPrice|TaxedPriceBuilder
     */
    private $taxedPrice;

    /**

     * @var null|TaxedPrice|TaxedPriceBuilder
     */
    private $taxedShippingPrice;

    /**

     * @var null|DiscountOnTotalPrice|DiscountOnTotalPriceBuilder
     */
    private $discountOnTotalPrice;

    /**

     * @var ?string
     */
    private $taxMode;

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

     * @var null|Address|AddressBuilder
     */
    private $billingAddress;

    /**

     * @var null|Address|AddressBuilder
     */
    private $shippingAddress;

    /**

     * @var ?string
     */
    private $shippingMode;

    /**

     * @var ?string
     */
    private $shippingKey;

    /**

     * @var null|ShippingInfo|ShippingInfoBuilder
     */
    private $shippingInfo;

    /**

     * @var null|ShippingRateInput|ShippingRateInputBuilder
     */
    private $shippingRateInput;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $shippingCustomFields;

    /**

     * @var ?ShippingCollection
     */
    private $shipping;

    /**

     * @var ?AddressCollection
     */
    private $itemShippingAddresses;

    /**

     * @var ?DiscountCodeInfoCollection
     */
    private $discountCodes;

    /**

     * @var ?DirectDiscountCollection
     */
    private $directDiscounts;

    /**

     * @var ?CartDiscountReferenceCollection
     */
    private $refusedGifts;

    /**

     * @var null|PaymentInfo|PaymentInfoBuilder
     */
    private $paymentInfo;

    /**

     * @var ?string
     */
    private $country;

    /**

     * @var ?string
     */
    private $locale;

    /**

     * @var ?string
     */
    private $origin;

    /**

     * @var null|CartReference|CartReferenceBuilder
     */
    private $cart;

    /**

     * @var null|QuoteReference|QuoteReferenceBuilder
     */
    private $quote;

    /**

     * @var ?string
     */
    private $orderState;

    /**

     * @var ?string
     */
    private $shipmentState;

    /**

     * @var ?string
     */
    private $paymentState;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $state;

    /**

     * @var ?SyncInfoCollection
     */
    private $syncInfo;

    /**

     * @var ?ReturnInfoCollection
     */
    private $returnInfo;

    /**
     * @deprecated
     * @var ?int
     */
    private $lastMessageSequenceNumber;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**

     * @var ?DateTimeImmutable
     */
    private $completedAt;

    /**

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**
     * <p>Unique identifier of the Order.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the Order.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Order was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Order was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>User-defined identifier of the Order that is unique across a Project.</p>
     *

     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * <p>User-defined identifier of a purchase Order.</p>
     * <p>It is typically set by the <a href="ctp:api:type:Buyer">Buyer</a> and can be used with <a href="/quotes-overview">Quotes</a> to track the purchase Order during the <a href="/../api/quotes-overview#intended-workflow">quote and order flow</a>.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> that the Order belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * <p>Email address of the Customer that the Order belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Customer Group of the Customer that the Order belongs to.
     * Used for <a href="ctp:api:type:LineItemPriceSelection">LineItem Price selection</a>.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Order.</p>
     *

     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Business Unit the Order belongs to.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Store the Order belongs to.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        return $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store;
    }

    /**
     * <p><a href="ctp:api:type:LineItems">Line Items</a> that are part of the Order.</p>
     *

     * @return null|LineItemCollection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * <p><a href="ctp:api:type:CustomLineItems">Custom Line Items</a> that are part of the Order.</p>
     *

     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems()
    {
        return $this->customLineItems;
    }

    /**
     * <p>Sum of the <code>totalPrice</code> field of all <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>, and if available, the <code>price</code> field of <a href="ctp:api:type:ShippingInfo">ShippingInfo</a>.
     * If a discount applies on <code>totalPrice</code>, this field holds the discounted value.</p>
     * <p>Taxes are included if <a href="ctp:api:type:TaxRate">TaxRate</a> <code>includedInPrice</code> is <code>true</code> for each price.</p>
     *

     * @return null|TypedMoney
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * <ul>
     * <li>For <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, it is automatically set when a <a href="ctp:api:type:OrderSetShippingAddressAction">shipping address is set</a>.</li>
     * <li>For <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, it is automatically set when the external Tax Rate for all Line Items, Custom Line Items, and Shipping Methods in the Cart are set.</li>
     * </ul>
     * <p>If a discount applies on <code>totalPrice</code>, this field holds the discounted values.</p>
     *

     * @return null|TaxedPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
    }

    /**
     * <p>Sum of the <code>taxedPrice</code> field of <a href="ctp:api:type:ShippingInfo">ShippingInfo</a> across all Shipping Methods.</p>
     *

     * @return null|TaxedPrice
     */
    public function getTaxedShippingPrice()
    {
        return $this->taxedShippingPrice instanceof TaxedPriceBuilder ? $this->taxedShippingPrice->build() : $this->taxedShippingPrice;
    }

    /**
     * <p>Discounts that apply on the total price of the Order.</p>
     *

     * @return null|DiscountOnTotalPrice
     */
    public function getDiscountOnTotalPrice()
    {
        return $this->discountOnTotalPrice instanceof DiscountOnTotalPriceBuilder ? $this->discountOnTotalPrice->build() : $this->discountOnTotalPrice;
    }

    /**
     * <p>Indicates how Tax Rates are set.</p>
     *

     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * <p>Indicates how monetary values are rounded when calculating taxes for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        return $this->taxRoundingMode;
    }

    /**
     * <p>Indicates how taxes are calculated when calculating taxes for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxCalculationMode()
    {
        return $this->taxCalculationMode;
    }

    /**
     * <p>Indicates how stock quantities are tracked for Line Items in the Order.</p>
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

     * @return null|Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress;
    }

    /**
     * <p>Shipping address associated with the Order.
     * Determines eligible <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> rates and Tax Rates of Line Items.</p>
     *

     * @return null|Address
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress;
    }

    /**
     * <p>Indicates whether there can be one or multiple Shipping Methods.</p>
     *

     * @return null|string
     */
    public function getShippingMode()
    {
        return $this->shippingMode;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> for <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
    }

    /**
     * <p>Shipping-related information for <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Automatically set when a <a href="ctp:api:type:StagedOrderSetShippingMethodAction">Shipping Method is set</a>.</p>
     *

     * @return null|ShippingInfo
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo;
    }

    /**
     * <p>Input used to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.
     * The data type of this field depends on the <code>shippingRateInputType.type</code> configured in the <a href="ctp:api:type:Project">Project</a>:</p>
     * <ul>
     * <li>If <code>CartClassification</code>, it is <a href="ctp:api:type:ClassificationShippingRateInput">ClassificationShippingRateInput</a>.</li>
     * <li>If <code>CartScore</code>, it is <a href="ctp:api:type:ScoreShippingRateInput">ScoreShippingRateInput</a>.</li>
     * <li>If <code>CartValue</code>, it cannot be used.</li>
     * </ul>
     *

     * @return null|ShippingRateInput
     */
    public function getShippingRateInput()
    {
        return $this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput;
    }

    /**
     * <p>Custom Fields of the Shipping Method for <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|CustomFields
     */
    public function getShippingCustomFields()
    {
        return $this->shippingCustomFields instanceof CustomFieldsBuilder ? $this->shippingCustomFields->build() : $this->shippingCustomFields;
    }

    /**
     * <p>Shipping-related information for <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Updated automatically each time a new <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a>.</p>
     *

     * @return null|ShippingCollection
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * <p>Additional shipping addresses of the Order as specified by <a href="ctp:api:type:LineItem">LineItems</a> using the <code>shippingDetails</code> field.
     * Eligible Shipping Methods or applicable Tax Rates are determined by the address in <code>shippingAddress</code>, and not <code>itemShippingAddresses</code>.</p>
     *

     * @return null|AddressCollection
     */
    public function getItemShippingAddresses()
    {
        return $this->itemShippingAddresses;
    }

    /**
     * <p>Discount Codes added to the Order.
     * An Order that has <code>directDiscounts</code> cannot have <code>discountCodes</code>.</p>
     *

     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes()
    {
        return $this->discountCodes;
    }

    /**
     * <p>Direct Discounts added to the Order.
     * An Order that has <code>discountCodes</code> cannot have <code>directDiscounts</code>.</p>
     *

     * @return null|DirectDiscountCollection
     */
    public function getDirectDiscounts()
    {
        return $this->directDiscounts;
    }

    /**
     * <p>Automatically set when a Line Item with <code>GiftLineItem</code> <a href="ctp:api:type:LineItemMode">LineItemMode</a> is <a href="ctp:api:type:StagedOrderRemoveLineItemAction">removed</a> from the Order.</p>
     *

     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts()
    {
        return $this->refusedGifts;
    }

    /**
     * <p>Payment information related to the Order.</p>
     *

     * @return null|PaymentInfo
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo instanceof PaymentInfoBuilder ? $this->paymentInfo->build() : $this->paymentInfo;
    }

    /**
     * <p>Used for <a href="ctp:api:type:LineItemPriceSelection">LineItem Price selection</a>.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>Languages of the Order.
     * Can only contain languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * <p>Indicates the origin of the Cart from which the Order was created.</p>
     *

     * @return null|string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Cart for an <a href="ctp:api:endpoint:/{projectKey}/orders:POST">Order created from Cart</a>.
     * The referenced Cart will have the <code>Ordered</code> <a href="ctp:api:type:CartState">CartState</a>.</p>
     *

     * @return null|CartReference
     */
    public function getCart()
    {
        return $this->cart instanceof CartReferenceBuilder ? $this->cart->build() : $this->cart;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Quote for an <a href="ctp:api:endpoint:/{projectKey}/orders/quotes:POST">Order created from Quote</a>.</p>
     *

     * @return null|QuoteReference
     */
    public function getQuote()
    {
        return $this->quote instanceof QuoteReferenceBuilder ? $this->quote->build() : $this->quote;
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
     * <p>Shipment status of the Order.</p>
     *

     * @return null|string
     */
    public function getShipmentState()
    {
        return $this->shipmentState;
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
     * <p><a href="ctp:api:type:State">State</a> of the Order.
     * This reference can point to a State in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>Contains synchronization activity information of the Order (like export or import).
     * Can only be set with <a href="ctp:api:type:OrderUpdateSyncInfoAction">Update SyncInfo</a> update action.</p>
     *

     * @return null|SyncInfoCollection
     */
    public function getSyncInfo()
    {
        return $this->syncInfo;
    }

    /**
     * <p>Contains information regarding the returns associated with the Order.</p>
     *

     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo()
    {
        return $this->returnInfo;
    }

    /**
     * <p>Internal-only field.</p>
     *
     * @deprecated
     * @return null|int
     */
    public function getLastMessageSequenceNumber()
    {
        return $this->lastMessageSequenceNumber;
    }

    /**
     * <p>Custom Fields of the Order.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>User-defined date and time (UTC) of the Order.
     * Present only on an Order created using <a href="ctp:api:endpoint:/{projectKey}/orders/import:POST">Order Import</a>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
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
     * @param ?CustomerGroupReference $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @param ?string $anonymousId
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

        return $this;
    }

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitKeyReference $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @param ?StoreKeyReference $store
     * @return $this
     */
    public function withStore(?StoreKeyReference $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @param ?LineItemCollection $lineItems
     * @return $this
     */
    public function withLineItems(?LineItemCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @param ?CustomLineItemCollection $customLineItems
     * @return $this
     */
    public function withCustomLineItems(?CustomLineItemCollection $customLineItems)
    {
        $this->customLineItems = $customLineItems;

        return $this;
    }

    /**
     * @param ?TypedMoney $totalPrice
     * @return $this
     */
    public function withTotalPrice(?TypedMoney $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @param ?TaxedPrice $taxedPrice
     * @return $this
     */
    public function withTaxedPrice(?TaxedPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @param ?TaxedPrice $taxedShippingPrice
     * @return $this
     */
    public function withTaxedShippingPrice(?TaxedPrice $taxedShippingPrice)
    {
        $this->taxedShippingPrice = $taxedShippingPrice;

        return $this;
    }

    /**
     * @param ?DiscountOnTotalPrice $discountOnTotalPrice
     * @return $this
     */
    public function withDiscountOnTotalPrice(?DiscountOnTotalPrice $discountOnTotalPrice)
    {
        $this->discountOnTotalPrice = $discountOnTotalPrice;

        return $this;
    }

    /**
     * @param ?string $taxMode
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

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
     * @param ?Address $billingAddress
     * @return $this
     */
    public function withBillingAddress(?Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @param ?Address $shippingAddress
     * @return $this
     */
    public function withShippingAddress(?Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @param ?string $shippingMode
     * @return $this
     */
    public function withShippingMode(?string $shippingMode)
    {
        $this->shippingMode = $shippingMode;

        return $this;
    }

    /**
     * @param ?string $shippingKey
     * @return $this
     */
    public function withShippingKey(?string $shippingKey)
    {
        $this->shippingKey = $shippingKey;

        return $this;
    }

    /**
     * @param ?ShippingInfo $shippingInfo
     * @return $this
     */
    public function withShippingInfo(?ShippingInfo $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @param ?ShippingRateInput $shippingRateInput
     * @return $this
     */
    public function withShippingRateInput(?ShippingRateInput $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @param ?CustomFields $shippingCustomFields
     * @return $this
     */
    public function withShippingCustomFields(?CustomFields $shippingCustomFields)
    {
        $this->shippingCustomFields = $shippingCustomFields;

        return $this;
    }

    /**
     * @param ?ShippingCollection $shipping
     * @return $this
     */
    public function withShipping(?ShippingCollection $shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * @param ?AddressCollection $itemShippingAddresses
     * @return $this
     */
    public function withItemShippingAddresses(?AddressCollection $itemShippingAddresses)
    {
        $this->itemShippingAddresses = $itemShippingAddresses;

        return $this;
    }

    /**
     * @param ?DiscountCodeInfoCollection $discountCodes
     * @return $this
     */
    public function withDiscountCodes(?DiscountCodeInfoCollection $discountCodes)
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }

    /**
     * @param ?DirectDiscountCollection $directDiscounts
     * @return $this
     */
    public function withDirectDiscounts(?DirectDiscountCollection $directDiscounts)
    {
        $this->directDiscounts = $directDiscounts;

        return $this;
    }

    /**
     * @param ?CartDiscountReferenceCollection $refusedGifts
     * @return $this
     */
    public function withRefusedGifts(?CartDiscountReferenceCollection $refusedGifts)
    {
        $this->refusedGifts = $refusedGifts;

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
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param ?string $locale
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

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
     * @param ?CartReference $cart
     * @return $this
     */
    public function withCart(?CartReference $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @param ?QuoteReference $quote
     * @return $this
     */
    public function withQuote(?QuoteReference $quote)
    {
        $this->quote = $quote;

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
     * @param ?string $shipmentState
     * @return $this
     */
    public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;

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
     * @param ?StateReference $state
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?SyncInfoCollection $syncInfo
     * @return $this
     */
    public function withSyncInfo(?SyncInfoCollection $syncInfo)
    {
        $this->syncInfo = $syncInfo;

        return $this;
    }

    /**
     * @param ?ReturnInfoCollection $returnInfo
     * @return $this
     */
    public function withReturnInfo(?ReturnInfoCollection $returnInfo)
    {
        $this->returnInfo = $returnInfo;

        return $this;
    }

    /**
     * @param ?int $lastMessageSequenceNumber
     * @return $this
     */
    public function withLastMessageSequenceNumber(?int $lastMessageSequenceNumber)
    {
        $this->lastMessageSequenceNumber = $lastMessageSequenceNumber;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

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
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroup() instead
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitKeyReferenceBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withStore() instead
     * @return $this
     */
    public function withStoreBuilder(?StoreKeyReferenceBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @deprecated use withTotalPrice() instead
     * @return $this
     */
    public function withTotalPriceBuilder(?TypedMoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @deprecated use withTaxedPrice() instead
     * @return $this
     */
    public function withTaxedPriceBuilder(?TaxedPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @deprecated use withTaxedShippingPrice() instead
     * @return $this
     */
    public function withTaxedShippingPriceBuilder(?TaxedPriceBuilder $taxedShippingPrice)
    {
        $this->taxedShippingPrice = $taxedShippingPrice;

        return $this;
    }

    /**
     * @deprecated use withDiscountOnTotalPrice() instead
     * @return $this
     */
    public function withDiscountOnTotalPriceBuilder(?DiscountOnTotalPriceBuilder $discountOnTotalPrice)
    {
        $this->discountOnTotalPrice = $discountOnTotalPrice;

        return $this;
    }

    /**
     * @deprecated use withBillingAddress() instead
     * @return $this
     */
    public function withBillingAddressBuilder(?AddressBuilder $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @deprecated use withShippingAddress() instead
     * @return $this
     */
    public function withShippingAddressBuilder(?AddressBuilder $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @deprecated use withShippingInfo() instead
     * @return $this
     */
    public function withShippingInfoBuilder(?ShippingInfoBuilder $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @deprecated use withShippingRateInput() instead
     * @return $this
     */
    public function withShippingRateInputBuilder(?ShippingRateInputBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @deprecated use withShippingCustomFields() instead
     * @return $this
     */
    public function withShippingCustomFieldsBuilder(?CustomFieldsBuilder $shippingCustomFields)
    {
        $this->shippingCustomFields = $shippingCustomFields;

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
     * @deprecated use withCart() instead
     * @return $this
     */
    public function withCartBuilder(?CartReferenceBuilder $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @deprecated use withQuote() instead
     * @return $this
     */
    public function withQuoteBuilder(?QuoteReferenceBuilder $quote)
    {
        $this->quote = $quote;

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
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function build(): StagedOrder
    {
        return new StagedOrderModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->orderNumber,
            $this->purchaseOrderNumber,
            $this->customerId,
            $this->customerEmail,
            $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->anonymousId,
            $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit,
            $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store,
            $this->lineItems,
            $this->customLineItems,
            $this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice,
            $this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice,
            $this->taxedShippingPrice instanceof TaxedPriceBuilder ? $this->taxedShippingPrice->build() : $this->taxedShippingPrice,
            $this->discountOnTotalPrice instanceof DiscountOnTotalPriceBuilder ? $this->discountOnTotalPrice->build() : $this->discountOnTotalPrice,
            $this->taxMode,
            $this->taxRoundingMode,
            $this->taxCalculationMode,
            $this->inventoryMode,
            $this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress,
            $this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress,
            $this->shippingMode,
            $this->shippingKey,
            $this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo,
            $this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput,
            $this->shippingCustomFields instanceof CustomFieldsBuilder ? $this->shippingCustomFields->build() : $this->shippingCustomFields,
            $this->shipping,
            $this->itemShippingAddresses,
            $this->discountCodes,
            $this->directDiscounts,
            $this->refusedGifts,
            $this->paymentInfo instanceof PaymentInfoBuilder ? $this->paymentInfo->build() : $this->paymentInfo,
            $this->country,
            $this->locale,
            $this->origin,
            $this->cart instanceof CartReferenceBuilder ? $this->cart->build() : $this->cart,
            $this->quote instanceof QuoteReferenceBuilder ? $this->quote->build() : $this->quote,
            $this->orderState,
            $this->shipmentState,
            $this->paymentState,
            $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state,
            $this->syncInfo,
            $this->returnInfo,
            $this->lastMessageSequenceNumber,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->completedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy
        );
    }

    public static function of(): StagedOrderBuilder
    {
        return new self();
    }
}
