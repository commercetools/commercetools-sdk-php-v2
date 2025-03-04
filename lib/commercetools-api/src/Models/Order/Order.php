<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DirectDiscountCollection;
use Commercetools\Api\Models\Cart\DiscountCodeInfoCollection;
use Commercetools\Api\Models\Cart\DiscountOnTotalPrice;
use Commercetools\Api\Models\Cart\DiscountTypeCombination;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\OrderEdit\StagedOrder;
use Commercetools\Api\Models\Quote\QuoteReference;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Order extends BaseResource
{
    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_PURCHASE_ORDER_NUMBER = 'purchaseOrderNumber';
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_STORE = 'store';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TAXED_SHIPPING_PRICE = 'taxedShippingPrice';
    public const FIELD_DISCOUNT_ON_TOTAL_PRICE = 'discountOnTotalPrice';
    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_BILLING_ADDRESS = 'billingAddress';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_SHIPPING_MODE = 'shippingMode';
    public const FIELD_SHIPPING_KEY = 'shippingKey';
    public const FIELD_SHIPPING_INFO = 'shippingInfo';
    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    public const FIELD_SHIPPING_CUSTOM_FIELDS = 'shippingCustomFields';
    public const FIELD_SHIPPING = 'shipping';
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';
    public const FIELD_DISCOUNT_CODES = 'discountCodes';
    public const FIELD_DIRECT_DISCOUNTS = 'directDiscounts';
    public const FIELD_REFUSED_GIFTS = 'refusedGifts';
    public const FIELD_PAYMENT_INFO = 'paymentInfo';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_CART = 'cart';
    public const FIELD_QUOTE = 'quote';
    public const FIELD_ORDER_STATE = 'orderState';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';
    public const FIELD_PAYMENT_STATE = 'paymentState';
    public const FIELD_STATE = 'state';
    public const FIELD_SYNC_INFO = 'syncInfo';
    public const FIELD_RETURN_INFO = 'returnInfo';
    public const FIELD_DISCOUNT_TYPE_COMBINATION = 'discountTypeCombination';
    public const FIELD_LAST_MESSAGE_SEQUENCE_NUMBER = 'lastMessageSequenceNumber';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_COMPLETED_AT = 'completedAt';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';

    /**
     * <p>Unique identifier of the Order.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Order.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-defined identifier of the Order that is unique across a Project.</p>
     *

     * @return null|string
     */
    public function getOrderNumber();

    /**
     * <p>User-defined identifier of a purchase Order.</p>
     * <p>It is typically set by the <a href="ctp:api:type:Buyer">Buyer</a> and can be used with <a href="/quotes-overview">Quotes</a> to track the purchase Order during the <a href="/../api/quotes-overview#intended-workflow">quote and order flow</a>.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> that the Order belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerId();

    /**
     * <p>Email address of the Customer that the Order belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Customer Group of the Customer that the Order belongs to.
     * Used for <a href="/../api/pricing-and-discounts-overview#line-item-price-selection">Line Item price selection</a>.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Order.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Business Unit the Order belongs to.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Store the Order belongs to.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * <p><a href="ctp:api:type:LineItems">Line Items</a> that are part of the Order.</p>
     *

     * @return null|LineItemCollection
     */
    public function getLineItems();

    /**
     * <p><a href="ctp:api:type:CustomLineItems">Custom Line Items</a> that are part of the Order.</p>
     *

     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems();

    /**
     * <p>Sum of the <code>totalPrice</code> field of all <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>, and if available, the <code>price</code> field of <a href="ctp:api:type:ShippingInfo">ShippingInfo</a>.
     * If a discount applies on <code>totalPrice</code>, this field holds the discounted value.</p>
     * <p>Taxes are included if <a href="ctp:api:type:TaxRate">TaxRate</a> <code>includedInPrice</code> is <code>true</code> for each price.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getTotalPrice();

    /**
     * <ul>
     * <li>For <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, it is automatically set when a <a href="ctp:api:type:OrderSetShippingAddressAction">shipping address is set</a>.</li>
     * <li>For <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, it is automatically set when <code>shippingAddress</code> and external Tax Rates for all Line Items, Custom Line Items, and Shipping Methods in the Cart are set.</li>
     * </ul>
     * <p>If a discount applies on <code>totalPrice</code>, this field holds the discounted values.</p>
     *

     * @return null|TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Sum of the <code>taxedPrice</code> field of <a href="ctp:api:type:ShippingInfo">ShippingInfo</a> across all Shipping Methods.</p>
     *

     * @return null|TaxedPrice
     */
    public function getTaxedShippingPrice();

    /**
     * <p>Discounts that apply on the total price of the Order.</p>
     *

     * @return null|DiscountOnTotalPrice
     */
    public function getDiscountOnTotalPrice();

    /**
     * <p>Indicates how Tax Rates are set.</p>
     *

     * @return null|string
     */
    public function getTaxMode();

    /**
     * <p>Indicates how monetary values are rounded when calculating taxes for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * <p>Indicates how taxes are calculated when calculating taxes for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * <p>Indicates how stock quantities are tracked for Line Items in the Order.</p>
     *

     * @return null|string
     */
    public function getInventoryMode();

    /**
     * <p>Billing address associated with the Order.</p>
     *

     * @return null|Address
     */
    public function getBillingAddress();

    /**
     * <p>Shipping address associated with the Order.
     * Determines eligible <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> rates and Tax Rates of Line Items.</p>
     *

     * @return null|Address
     */
    public function getShippingAddress();

    /**
     * <p>Indicates whether there can be one or multiple Shipping Methods.</p>
     *

     * @return null|string
     */
    public function getShippingMode();

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> for <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * <p>Shipping-related information for <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Automatically set when a <a href="ctp:api:type:StagedOrderSetShippingMethodAction">Shipping Method is set</a>.</p>
     *

     * @return null|ShippingInfo
     */
    public function getShippingInfo();

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
    public function getShippingRateInput();

    /**
     * <p>Custom Fields of the Shipping Method for <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|CustomFields
     */
    public function getShippingCustomFields();

    /**
     * <p>Shipping-related information for <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Updated automatically each time a new <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a>.</p>
     *

     * @return null|ShippingCollection
     */
    public function getShipping();

    /**
     * <p>Additional shipping addresses of the Order as specified by <a href="ctp:api:type:LineItem">LineItems</a> using the <code>shippingDetails</code> field.
     * Eligible Shipping Methods or applicable Tax Rates are determined by the address in <code>shippingAddress</code>, and not <code>itemShippingAddresses</code>.</p>
     *

     * @return null|AddressCollection
     */
    public function getItemShippingAddresses();

    /**
     * <p>Discount Codes added to the Order.
     * An Order that has <code>directDiscounts</code> cannot have <code>discountCodes</code>.</p>
     *

     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes();

    /**
     * <p>Direct Discounts added to the Order.
     * An Order that has <code>discountCodes</code> cannot have <code>directDiscounts</code>.</p>
     *

     * @return null|DirectDiscountCollection
     */
    public function getDirectDiscounts();

    /**
     * <p>Automatically set when a Line Item with <code>GiftLineItem</code> <a href="ctp:api:type:LineItemMode">LineItemMode</a> is <a href="ctp:api:type:StagedOrderRemoveLineItemAction">removed</a> from the Order.</p>
     *

     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts();

    /**
     * <p>Payment information related to the Order.</p>
     *

     * @return null|PaymentInfo
     */
    public function getPaymentInfo();

    /**
     * <p>Used for <a href="/../api/pricing-and-discounts-overview#line-item-price-selection">Line Item price selection</a>.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Languages of the Order.
     * Can only contain languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * <p>Indicates the origin of the Cart from which the Order was created.</p>
     *

     * @return null|string
     */
    public function getOrigin();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Cart for an <a href="ctp:api:endpoint:/{projectKey}/orders:POST">Order created from Cart</a>.
     * The referenced Cart will have the <code>Ordered</code> <a href="ctp:api:type:CartState">CartState</a>.</p>
     *

     * @return null|CartReference
     */
    public function getCart();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Quote for an <a href="ctp:api:endpoint:/{projectKey}/orders/quotes:POST">Order created from Quote</a>.</p>
     *

     * @return null|QuoteReference
     */
    public function getQuote();

    /**
     * <p>Current status of the Order.</p>
     *

     * @return null|string
     */
    public function getOrderState();

    /**
     * <p>Shipment status of the Order.</p>
     *

     * @return null|string
     */
    public function getShipmentState();

    /**
     * <p>Payment status of the Order.</p>
     *

     * @return null|string
     */
    public function getPaymentState();

    /**
     * <p><a href="ctp:api:type:State">State</a> of the Order.
     * This reference can point to a State in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**
     * <p>Contains synchronization activity information of the Order (like export or import).
     * Can only be set with <a href="ctp:api:type:OrderUpdateSyncInfoAction">Update SyncInfo</a> update action.</p>
     *

     * @return null|SyncInfoCollection
     */
    public function getSyncInfo();

    /**
     * <p>Contains information regarding the returns associated with the Order.</p>
     *

     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo();

    /**
     * <p>Indicates if a combination of discount types can apply on an Order.</p>
     *

     * @return null|DiscountTypeCombination
     */
    public function getDiscountTypeCombination();

    /**
     * <p>Internal-only field.</p>
     *
     * @deprecated
     * @return null|int
     */
    public function getLastMessageSequenceNumber();

    /**
     * <p>Custom Fields of the Order.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>User-defined date and time (UTC) of the Order.
     * Present only on an Order created using <a href="ctp:api:endpoint:/{projectKey}/orders/import:POST">Order Import</a>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCompletedAt();

    /**
     * <p>Date and time (UTC) the Order was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Order was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the Order.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the Order.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void;

    /**
     * @param ?string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): void;

    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void;

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void;

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void;

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;

    /**
     * @param ?LineItemCollection $lineItems
     */
    public function setLineItems(?LineItemCollection $lineItems): void;

    /**
     * @param ?CustomLineItemCollection $customLineItems
     */
    public function setCustomLineItems(?CustomLineItemCollection $customLineItems): void;

    /**
     * @param ?CentPrecisionMoney $totalPrice
     */
    public function setTotalPrice(?CentPrecisionMoney $totalPrice): void;

    /**
     * @param ?TaxedPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;

    /**
     * @param ?TaxedPrice $taxedShippingPrice
     */
    public function setTaxedShippingPrice(?TaxedPrice $taxedShippingPrice): void;

    /**
     * @param ?DiscountOnTotalPrice $discountOnTotalPrice
     */
    public function setDiscountOnTotalPrice(?DiscountOnTotalPrice $discountOnTotalPrice): void;

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void;

    /**
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void;

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void;

    /**
     * @param ?Address $billingAddress
     */
    public function setBillingAddress(?Address $billingAddress): void;

    /**
     * @param ?Address $shippingAddress
     */
    public function setShippingAddress(?Address $shippingAddress): void;

    /**
     * @param ?string $shippingMode
     */
    public function setShippingMode(?string $shippingMode): void;

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;

    /**
     * @param ?ShippingInfo $shippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo): void;

    /**
     * @param ?ShippingRateInput $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;

    /**
     * @param ?CustomFields $shippingCustomFields
     */
    public function setShippingCustomFields(?CustomFields $shippingCustomFields): void;

    /**
     * @param ?ShippingCollection $shipping
     */
    public function setShipping(?ShippingCollection $shipping): void;

    /**
     * @param ?AddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;

    /**
     * @param ?DiscountCodeInfoCollection $discountCodes
     */
    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void;

    /**
     * @param ?DirectDiscountCollection $directDiscounts
     */
    public function setDirectDiscounts(?DirectDiscountCollection $directDiscounts): void;

    /**
     * @param ?CartDiscountReferenceCollection $refusedGifts
     */
    public function setRefusedGifts(?CartDiscountReferenceCollection $refusedGifts): void;

    /**
     * @param ?PaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void;

    /**
     * @param ?CartReference $cart
     */
    public function setCart(?CartReference $cart): void;

    /**
     * @param ?QuoteReference $quote
     */
    public function setQuote(?QuoteReference $quote): void;

    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void;

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void;

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void;

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;

    /**
     * @param ?SyncInfoCollection $syncInfo
     */
    public function setSyncInfo(?SyncInfoCollection $syncInfo): void;

    /**
     * @param ?ReturnInfoCollection $returnInfo
     */
    public function setReturnInfo(?ReturnInfoCollection $returnInfo): void;

    /**
     * @param ?DiscountTypeCombination $discountTypeCombination
     */
    public function setDiscountTypeCombination(?DiscountTypeCombination $discountTypeCombination): void;

    /**
     * @param ?int $lastMessageSequenceNumber
     */
    public function setLastMessageSequenceNumber(?int $lastMessageSequenceNumber): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?DateTimeImmutable $completedAt
     */
    public function setCompletedAt(?DateTimeImmutable $completedAt): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;
}
