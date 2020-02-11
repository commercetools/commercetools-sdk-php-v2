<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Cart\CustomLineItemDraftCollection;
use Commercetools\Api\Models\Cart\TaxedPriceDraft;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use DateTimeImmutable;

interface OrderImportDraft extends JsonObject
{

    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_CUSTOMER_ID = 'customerId';
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
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';
    public const FIELD_STORE = 'store';
    public const FIELD_ORIGIN = 'origin';

    /**
     * <p>String that unique identifies an order.
     * It can be used to create more human-readable (in contrast to ID) identifier for the order.
     * It should be unique within a project.</p>
     *
     * @return null|string
     */
    public function getOrderNumber();

    /**
     * <p>If given the customer with that ID must exist in the project.</p>
     *
     * @return null|string
     */
    public function getCustomerId();

    /**
     * <p>The customer email can be used when no check against existing Customers is desired during order import.</p>
     *
     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p>If not given <code>customLineItems</code> must not be empty.</p>
     *
     * @return null|LineItemImportDraftCollection
     */
    public function getLineItems();

    /**
     * <p>If not given <code>lineItems</code> must not be empty.</p>
     *
     * @return null|CustomLineItemDraftCollection
     */
    public function getCustomLineItems();

    /**
     * @return null|Money
     */
    public function getTotalPrice();

    /**
     * <p>Order Import does not support calculation of taxes.
     * When setting the draft the taxedPrice is to be provided.</p>
     *
     * @return null|TaxedPriceDraft
     */
    public function getTaxedPrice();

    /**
     * @return null|Address
     */
    public function getShippingAddress();

    /**
     * @return null|Address
     */
    public function getBillingAddress();

    /**
     * <p>Set when the customer is set and the customer is a member of a customer group.
     * Used for product variant price selection.</p>
     *
     * @return null|CustomerGroupResourceIdentifier
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
     * <p>If not given the <code>Open</code> state will be assigned by default.</p>
     *
     * @return null|string
     */
    public function getOrderState();

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
     * @return null|ShippingInfoImportDraft
     */
    public function getShippingInfo();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCompletedAt();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>If not given the mode <code>None</code> will be assigned by default.</p>
     *
     * @return null|string
     */
    public function getInventoryMode();

    /**
     * <p>If not given the tax rounding mode <code>HalfEven</code> will be assigned by default.</p>
     *
     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * <p>Contains addresses for orders with multiple shipping addresses.</p>
     *
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses();

    /**
     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * <p>The default origin is <code>Customer</code>.</p>
     *
     * @return null|string
     */
    public function getOrigin();

    public function setOrderNumber(?string $orderNumber): void;

    public function setCustomerId(?string $customerId): void;

    public function setCustomerEmail(?string $customerEmail): void;

    public function setLineItems(?LineItemImportDraftCollection $lineItems): void;

    public function setCustomLineItems(?CustomLineItemDraftCollection $customLineItems): void;

    public function setTotalPrice(?Money $totalPrice): void;

    public function setTaxedPrice(?TaxedPriceDraft $taxedPrice): void;

    public function setShippingAddress(?Address $shippingAddress): void;

    public function setBillingAddress(?Address $billingAddress): void;

    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;

    public function setCountry(?string $country): void;

    public function setOrderState(?string $orderState): void;

    public function setShipmentState(?string $shipmentState): void;

    public function setPaymentState(?string $paymentState): void;

    public function setShippingInfo(?ShippingInfoImportDraft $shippingInfo): void;

    public function setCompletedAt(?DateTimeImmutable $completedAt): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setInventoryMode(?string $inventoryMode): void;

    public function setTaxRoundingMode(?string $taxRoundingMode): void;

    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;

    public function setStore(?StoreResourceIdentifier $store): void;

    public function setOrigin(?string $origin): void;
}
