<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\CustomLineItemDraftCollection;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OrderImportDraft extends JsonObject
{
    const FIELD_ORDER_NUMBER = 'orderNumber';
    const FIELD_CUSTOMER_ID = 'customerId';
    const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    const FIELD_TOTAL_PRICE = 'totalPrice';
    const FIELD_TAXED_PRICE = 'taxedPrice';
    const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    const FIELD_BILLING_ADDRESS = 'billingAddress';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_COUNTRY = 'country';
    const FIELD_ORDER_STATE = 'orderState';
    const FIELD_SHIPMENT_STATE = 'shipmentState';
    const FIELD_PAYMENT_STATE = 'paymentState';
    const FIELD_SHIPPING_INFO = 'shippingInfo';
    const FIELD_COMPLETED_AT = 'completedAt';
    const FIELD_CUSTOM = 'custom';
    const FIELD_INVENTORY_MODE = 'inventoryMode';
    const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';

    /**
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
     * @return null|LineItemImportDraftCollection
     */
    public function getLineItems();

    /**
     * @return null|CustomLineItemDraftCollection
     */
    public function getCustomLineItems();

    /**
     * @return null|Money
     */
    public function getTotalPrice();

    /**
     * @return null|TaxedPrice
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
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * @return null|string
     */
    public function getCountry();

    /**
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
     * @return null|ShippingInfoImportDraft
     */
    public function getShippingInfo();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCompletedAt();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|string
     */
    public function getInventoryMode();

    /**
     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses();

    public function setOrderNumber(?string $orderNumber): void;

    public function setCustomerId(?string $customerId): void;

    public function setCustomerEmail(?string $customerEmail): void;

    public function setLineItems(?LineItemImportDraftCollection $lineItems): void;

    public function setCustomLineItems(?CustomLineItemDraftCollection $customLineItems): void;

    public function setTotalPrice(?Money $totalPrice): void;

    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;

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
}
