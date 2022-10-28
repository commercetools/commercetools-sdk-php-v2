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
use Commercetools\Api\Models\Cart\DiscountCodeInfoCollection;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\TypedMoney;
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
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_COMPLETED_AT = 'completedAt';
    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_STORE = 'store';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TAXED_SHIPPING_PRICE = 'taxedShippingPrice';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_BILLING_ADDRESS = 'billingAddress';
    public const FIELD_SHIPPING_MODE = 'shippingMode';
    public const FIELD_SHIPPING = 'shipping';
    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_ORDER_STATE = 'orderState';
    public const FIELD_STATE = 'state';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';
    public const FIELD_PAYMENT_STATE = 'paymentState';
    public const FIELD_SHIPPING_INFO = 'shippingInfo';
    public const FIELD_SYNC_INFO = 'syncInfo';
    public const FIELD_RETURN_INFO = 'returnInfo';
    public const FIELD_DISCOUNT_CODES = 'discountCodes';
    public const FIELD_LAST_MESSAGE_SEQUENCE_NUMBER = 'lastMessageSequenceNumber';
    public const FIELD_CART = 'cart';
    public const FIELD_QUOTE = 'quote';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_PAYMENT_INFO = 'paymentInfo';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';
    public const FIELD_REFUSED_GIFTS = 'refusedGifts';

    /**
     * <p>Unique identifier of the Order.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the order.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>This field will only be present if it was set for Order Import</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCompletedAt();

    /**
     * <p>String that uniquely identifies an order.
     * It can be used to create more human-readable (in contrast to ID) identifier for the order.
     * It should be unique across a project.
     * Once it's set it cannot be changed.</p>
     *

     * @return null|string
     */
    public function getOrderNumber();

    /**

     * @return null|string
     */
    public function getCustomerId();

    /**

     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p>Identifies carts and orders belonging to an anonymous session (the customer has not signed up/in yet).</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p>The Business Unit the Order belongs to.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit();

    /**

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**

     * @return null|LineItemCollection
     */
    public function getLineItems();

    /**

     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems();

    /**

     * @return null|TypedMoney
     */
    public function getTotalPrice();

    /**
     * <p>The taxes are calculated based on the shipping address.</p>
     *

     * @return null|TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Sum of <code>taxedPrice</code> of <a href="ctp:api:type:ShippingInfo">ShippingInfo</a> across all Shipping Methods.
     * For <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, it is set automatically only if <a href="ctp:api:type:CartSetShippingAddressAction">shipping address is set</a> or <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a> to the Cart.</p>
     *

     * @return null|TaxedPrice
     */
    public function getTaxedShippingPrice();

    /**
     * <p>Holds all shipping-related information per Shipping Method.</p>
     * <p>For <code>Multi</code> <a href="ctp:api:typeShippingMode">ShippingMode</a>, it is updated automatically after the Shipping Methods are added.</p>
     *

     * @return null|Address
     */
    public function getShippingAddress();

    /**

     * @return null|Address
     */
    public function getBillingAddress();

    /**
     * <p>Indicates whether one or multiple Shipping Methods are added to the Cart.</p>
     *

     * @return null|string
     */
    public function getShippingMode();

    /**
     * <p>Holds all shipping-related information per Shipping Method for <code>Multi</code> <a href="ctp:api:typeShippingMode">ShippingMode</a>.</p>
     * <p>It is updated automatically after the <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a>.</p>
     *

     * @return null|ShippingCollection
     */
    public function getShipping();

    /**

     * @return null|string
     */
    public function getTaxMode();

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for rouding.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * <p>Set when the customer is set and the customer is a member of a customer group.
     * Used for product variant price selection.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.
     * Used for product variant price selection.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>One of the four predefined OrderStates.</p>
     *

     * @return null|string
     */
    public function getOrderState();

    /**
     * <p>This reference can point to a state in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**

     * @return null|string
     */
    public function getShipmentState();

    /**

     * @return null|string
     */
    public function getPaymentState();

    /**
     * <p>Set if the ShippingMethod is set.</p>
     *

     * @return null|ShippingInfo
     */
    public function getShippingInfo();

    /**

     * @return null|SyncInfoCollection
     */
    public function getSyncInfo();

    /**

     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo();

    /**

     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes();

    /**
     * <p>Internal-only field.</p>
     *
     * @deprecated
     * @return null|int
     */
    public function getLastMessageSequenceNumber();

    /**
     * <p>Set when this order was created from a cart.
     * The cart will have the state <code>Ordered</code>.</p>
     *

     * @return null|CartReference
     */
    public function getCart();

    /**
     * <p>Set when this order was created from a quote.</p>
     *

     * @return null|QuoteReference
     */
    public function getQuote();

    /**

     * @return null|CustomFields
     */
    public function getCustom();

    /**

     * @return null|PaymentInfo
     */
    public function getPaymentInfo();

    /**

     * @return null|string
     */
    public function getLocale();

    /**

     * @return null|string
     */
    public function getInventoryMode();

    /**

     * @return null|string
     */
    public function getOrigin();

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for calculating the price with LineItemLevel (horizontally) or UnitPriceLevel (vertically) calculation mode.</p>
     *

     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * <p>The shippingRateInput is used as an input to select a ShippingRatePriceTier.</p>
     *

     * @return null|ShippingRateInput
     */
    public function getShippingRateInput();

    /**
     * <p>Contains addresses for orders with multiple shipping addresses.</p>
     *

     * @return null|AddressCollection
     */
    public function getItemShippingAddresses();

    /**
     * <p>Automatically filled when a line item with LineItemMode <code>GiftLineItem</code> is removed from this order.</p>
     *

     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

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

    /**
     * @param ?DateTimeImmutable $completedAt
     */
    public function setCompletedAt(?DateTimeImmutable $completedAt): void;

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void;

    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void;

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void;

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
     * @param ?TypedMoney $totalPrice
     */
    public function setTotalPrice(?TypedMoney $totalPrice): void;

    /**
     * @param ?TaxedPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;

    /**
     * @param ?TaxedPrice $taxedShippingPrice
     */
    public function setTaxedShippingPrice(?TaxedPrice $taxedShippingPrice): void;

    /**
     * @param ?Address $shippingAddress
     */
    public function setShippingAddress(?Address $shippingAddress): void;

    /**
     * @param ?Address $billingAddress
     */
    public function setBillingAddress(?Address $billingAddress): void;

    /**
     * @param ?string $shippingMode
     */
    public function setShippingMode(?string $shippingMode): void;

    /**
     * @param ?ShippingCollection $shipping
     */
    public function setShipping(?ShippingCollection $shipping): void;

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void;

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void;

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void;

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void;

    /**
     * @param ?ShippingInfo $shippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo): void;

    /**
     * @param ?SyncInfoCollection $syncInfo
     */
    public function setSyncInfo(?SyncInfoCollection $syncInfo): void;

    /**
     * @param ?ReturnInfoCollection $returnInfo
     */
    public function setReturnInfo(?ReturnInfoCollection $returnInfo): void;

    /**
     * @param ?DiscountCodeInfoCollection $discountCodes
     */
    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void;

    /**
     * @param ?int $lastMessageSequenceNumber
     */
    public function setLastMessageSequenceNumber(?int $lastMessageSequenceNumber): void;

    /**
     * @param ?CartReference $cart
     */
    public function setCart(?CartReference $cart): void;

    /**
     * @param ?QuoteReference $quote
     */
    public function setQuote(?QuoteReference $quote): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?PaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void;

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void;

    /**
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void;

    /**
     * @param ?ShippingRateInput $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;

    /**
     * @param ?AddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;

    /**
     * @param ?CartDiscountReferenceCollection $refusedGifts
     */
    public function setRefusedGifts(?CartDiscountReferenceCollection $refusedGifts): void;
}
