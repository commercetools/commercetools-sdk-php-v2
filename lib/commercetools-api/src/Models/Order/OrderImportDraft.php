<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\Cart\TaxedPriceDraft;
use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OrderImportDraft extends JsonObject
{
    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_PURCHASE_ORDER_NUMBER = 'purchaseOrderNumber';
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_STORE = 'store';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_PRICE_ROUNDING_MODE = 'priceRoundingMode';
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_BILLING_ADDRESS = 'billingAddress';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';
    public const FIELD_SHIPPING_INFO = 'shippingInfo';
    public const FIELD_PAYMENT_INFO = 'paymentInfo';
    public const FIELD_PAYMENT_STATE = 'paymentState';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';
    public const FIELD_ORDER_STATE = 'orderState';
    public const FIELD_STATE = 'state';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_COMPLETED_AT = 'completedAt';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined identifier of the Order. Must be unique across a Project.
     * Once set, the value cannot be changed.</p>
     *

     * @return null|string
     */
    public function getOrderNumber();

    /**
     * <p>User-defined identifier for a purchase Order.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber();

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> the Order belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerId();

    /**
     * <p>The Email address of the Customer the Order belongs to. Can be used instead of <code>customerId</code> when no check against existing <a href="ctp:api:type:Customer">Customers</a> is required.</p>
     *

     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p>The Customer Group of the Customer the Order belongs to.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Business Unit the Order should belong to.
     * When the <code>customerId</code> of the Order is also set, the <a href="ctp:api:type:Customer">Customer</a> must be an <a href="ctp:api:type:Associate">Associate</a> of the Business Unit. Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit();

    /**
     * <p>The Store the Order belongs to.
     * Used for <a href="#filtering">filtering</a>.</p>
     * <p>If a <a href="ctp:api:type:LineItemImportDraft">LineItemImportDraft</a> or a <a href="ctp:api:type:CustomLineItemImportDraft">CustomLineItemImportDraft</a> specifies a <code>distributionChannel</code> or a <code>supplyChannel</code> that is not defined for the referenced Store, the Order Import gets rejected.
     * The same applies when the provided <code>country</code> is not defined for the referenced Store.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * <p><a href="ctp:api:type:LineItems">Line Items</a> to add to the Order.</p>
     * <p>If not specified, <code>customLineItems</code> must not be empty.</p>
     *

     * @return null|LineItemImportDraftCollection
     */
    public function getLineItems();

    /**
     * <p><a href="ctp:api:type:CustomLineItems">Custom Line Items</a> to add to the Cart.</p>
     * <p>If not specified, <code>lineItems</code> must not be empty.</p>
     *

     * @return null|CustomLineItemImportDraftCollection
     */
    public function getCustomLineItems();

    /**
     * <p>The total Price of the Order. The amount can be negative.</p>
     *

     * @return null|Money
     */
    public function getTotalPrice();

    /**
     * <p>Include TaxedPrice information for the Order. If not included, and if you have Tax Rates set for Line Items and Custom Line Items, the Order total will not be recalculated.</p>
     *

     * @return null|TaxedPriceDraft
     */
    public function getTaxedPrice();

    /**
     * <p>Determines how the total prices on <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a> are rounded when calculated.</p>
     *

     * @return null|string
     */
    public function getPriceRoundingMode();

    /**
     * <p>Determines how monetary values are rounded when calculating taxes for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * <p>Determines how taxes are calculated for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * <p>Determines how stock quantities are tracked for Line Items in the Cart.</p>
     *

     * @return null|string
     */
    public function getInventoryMode();

    /**
     * <p>Billing address associated with the Order.</p>
     *

     * @return null|BaseAddress
     */
    public function getBillingAddress();

    /**
     * <p>Shipping address associated with the Order.</p>
     *

     * @return null|BaseAddress
     */
    public function getShippingAddress();

    /**
     * <p>Addresses for Orders with multiple shipping addresses. Addresses must include a value for <code>key</code>.</p>
     *

     * @return null|BaseAddressCollection
     */
    public function getItemShippingAddresses();

    /**
     * <p>Shipping-related information of the Order.</p>
     *

     * @return null|ShippingInfoImportDraft
     */
    public function getShippingInfo();

    /**
     * <p>Payment information associated with the Order.</p>
     *

     * @return null|PaymentInfo
     */
    public function getPaymentInfo();

    /**
     * <p>Payment status of the Order.</p>
     *

     * @return null|string
     */
    public function getPaymentState();

    /**
     * <p>Shipment status of the Order.</p>
     *

     * @return null|string
     */
    public function getShipmentState();

    /**
     * <p>Current status of the Order.</p>
     *

     * @return null|string
     */
    public function getOrderState();

    /**
     * <p>State of the Order in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**
     * <p>Include a value to associate a country with the Order.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Indicates the origin of the Order.</p>
     *

     * @return null|string
     */
    public function getOrigin();

    /**
     * <p>User-defined date and time for the Order. This value does not influence the <code>createdAt</code> or <code>lastModifiedAt</code> values of the Order created by the Order Import.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCompletedAt();

    /**
     * <p>Custom Fields for the Order.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

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
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void;

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void;

    /**
     * @param ?LineItemImportDraftCollection $lineItems
     */
    public function setLineItems(?LineItemImportDraftCollection $lineItems): void;

    /**
     * @param ?CustomLineItemImportDraftCollection $customLineItems
     */
    public function setCustomLineItems(?CustomLineItemImportDraftCollection $customLineItems): void;

    /**
     * @param ?Money $totalPrice
     */
    public function setTotalPrice(?Money $totalPrice): void;

    /**
     * @param ?TaxedPriceDraft $taxedPrice
     */
    public function setTaxedPrice(?TaxedPriceDraft $taxedPrice): void;

    /**
     * @param ?string $priceRoundingMode
     */
    public function setPriceRoundingMode(?string $priceRoundingMode): void;

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
     * @param ?BaseAddress $billingAddress
     */
    public function setBillingAddress(?BaseAddress $billingAddress): void;

    /**
     * @param ?BaseAddress $shippingAddress
     */
    public function setShippingAddress(?BaseAddress $shippingAddress): void;

    /**
     * @param ?BaseAddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?BaseAddressCollection $itemShippingAddresses): void;

    /**
     * @param ?ShippingInfoImportDraft $shippingInfo
     */
    public function setShippingInfo(?ShippingInfoImportDraft $shippingInfo): void;

    /**
     * @param ?PaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void;

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void;

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void;

    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void;

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void;

    /**
     * @param ?DateTimeImmutable $completedAt
     */
    public function setCompletedAt(?DateTimeImmutable $completedAt): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
