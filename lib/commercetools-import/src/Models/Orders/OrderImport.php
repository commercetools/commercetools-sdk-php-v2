<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\Address;
use Commercetools\Import\Models\Common\AddressCollection;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\CustomerKeyReference;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Customfields\Custom;
use DateTimeImmutable;

interface OrderImport extends JsonObject
{
    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_BILLING_ADDRESS = 'billingAddress';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_ORDER_STATE = 'orderState';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';
    public const FIELD_PAYMENT_STATE = 'paymentState';
    public const FIELD_SHIPPING_INFO = 'shippingInfo';
    public const FIELD_COMPLETED_AT = 'completedAt';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';

    /**
     * <p>Maps to <code>Order.orderNumber</code>, String that uniquely identifies an order. It should be unique across a project. Once it's set it cannot be changed.</p>
     *
     * @return null|string
     */
    public function getOrderNumber();

    /**
     * @return null|CustomerKeyReference
     */
    public function getCustomer();

    /**
     * <p>Maps to <code>Order.customerEmail</code>.</p>
     *
     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p>Maps to <code>Order.lineItems</code>.</p>
     *
     * @return null|LineItemImportDraftCollection
     */
    public function getLineItems();

    /**
     * <p>Maps to <code>Order.customLineItems</code></p>
     *
     * @return null|CustomLineItemDraftCollection
     */
    public function getCustomLineItems();

    /**
     * <p>Maps to <code>Order.totalPrice</code>. TypedMoney is what is called BaseMoney in the HTTP API.</p>
     *
     * @return null|TypedMoney
     */
    public function getTotalPrice();

    /**
     * <p>Maps to <code>Order.taxedPrice</code>.</p>
     *
     * @return null|TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Maps to <code>Order.shippingAddress</code>.</p>
     *
     * @return null|Address
     */
    public function getShippingAddress();

    /**
     * <p>Maps to <code>Order.billingAddress</code>.</p>
     *
     * @return null|Address
     */
    public function getBillingAddress();

    /**
     * <p>Maps to <code>Order.customerGroup</code>.</p>
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup();

    /**
     * <p>Maps to <code>Order.country</code>.</p>
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Maps to <code>Order.orderState</code>.</p>
     *
     * @return null|string
     */
    public function getOrderState();

    /**
     * <p>Maps to <code>Order.shipmentState</code>.</p>
     *
     * @return null|string
     */
    public function getShipmentState();

    /**
     * <p>Maps to <code>Order.paymentState</code>.</p>
     *
     * @return null|string
     */
    public function getPaymentState();

    /**
     * <p>Maps to <code>Order.shippingInfo</code>.</p>
     *
     * @return null|ShippingInfoImportDraft
     */
    public function getShippingInfo();

    /**
     * <p>Maps to <code>Order.completedAt</code>.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCompletedAt();

    /**
     * <p>Maps to <code>Order.custom</code>.</p>
     *
     * @return null|Custom
     */
    public function getCustom();

    /**
     * <p>Maps to <code>Order.inventoryMode</code>.</p>
     *
     * @return null|string
     */
    public function getInventoryMode();

    /**
     * <p>Maps to <code>Order.taxRoundingMode</code>.</p>
     *
     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * <p>Maps to <code>Order.taxCalculationMode</code>.</p>
     *
     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * <p>Maps to <code>Order.origin</code>.</p>
     *
     * @return null|string
     */
    public function getOrigin();

    /**
     * <p>Maps to <code>Order.itemShippingAddresses</code>.</p>
     *
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses();

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void;

    /**
     * @param ?CustomerKeyReference $customer
     */
    public function setCustomer(?CustomerKeyReference $customer): void;

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void;

    /**
     * @param ?LineItemImportDraftCollection $lineItems
     */
    public function setLineItems(?LineItemImportDraftCollection $lineItems): void;

    /**
     * @param ?CustomLineItemDraftCollection $customLineItems
     */
    public function setCustomLineItems(?CustomLineItemDraftCollection $customLineItems): void;

    /**
     * @param ?TypedMoney $totalPrice
     */
    public function setTotalPrice(?TypedMoney $totalPrice): void;

    /**
     * @param ?TaxedPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;

    /**
     * @param ?Address $shippingAddress
     */
    public function setShippingAddress(?Address $shippingAddress): void;

    /**
     * @param ?Address $billingAddress
     */
    public function setBillingAddress(?Address $billingAddress): void;

    /**
     * @param ?CustomerGroupKeyReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

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
     * @param ?ShippingInfoImportDraft $shippingInfo
     */
    public function setShippingInfo(?ShippingInfoImportDraft $shippingInfo): void;

    /**
     * @param ?DateTimeImmutable $completedAt
     */
    public function setCompletedAt(?DateTimeImmutable $completedAt): void;

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void;

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void;

    /**
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void;

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void;

    /**
     * @param ?AddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;
}
