<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Cart\CustomLineItemDraft;
use Commercetools\Types\Cart\ShippingInfo;
use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Cart\CustomLineItemDraftCollection;
use Commercetools\Types\Common\Money;
use Commercetools\Types\Cart\TaxedPrice;
use Commercetools\Types\Common\Address;

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

    /**
     * @return string
     */
    public function getOrderNumber();

    /**
     * @return string
     */
    public function getCustomerId();

    /**
     * @return string
     */
    public function getCustomerEmail();

    /**
     * @return LineItemImportDraftCollection
     */
    public function getLineItems();

    /**
     * @return CustomLineItemDraftCollection
     */
    public function getCustomLineItems();

    /**
     * @return Money
     */
    public function getTotalPrice();

    /**
     * @return TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * @return Address
     */
    public function getShippingAddress();

    /**
     * @return Address
     */
    public function getBillingAddress();

    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return string
     */
    public function getOrderState();

    /**
     * @return string
     */
    public function getShipmentState();

    /**
     * @return string
     */
    public function getPaymentState();

    /**
     * @return ShippingInfo
     */
    public function getShippingInfo();

    /**
     * @return \DateTimeImmutable
     */
    public function getCompletedAt();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return string
     */
    public function getInventoryMode();

    /**
     * @return string
     */
    public function getTaxRoundingMode();

    /**
     * @param string $orderNumber
     * @return $this
     */
    public function setOrderNumber(string $orderNumber);

    /**
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId(string $customerId);

    /**
     * @param string $customerEmail
     * @return $this
     */
    public function setCustomerEmail(string $customerEmail);

    /**
     * @param LineItemImportDraftCollection $lineItems
     * @return $this
     */
    public function setLineItems(LineItemImportDraftCollection $lineItems);

    /**
     * @param CustomLineItemDraftCollection $customLineItems
     * @return $this
     */
    public function setCustomLineItems(CustomLineItemDraftCollection $customLineItems);

    /**
     * @param Money $totalPrice
     * @return $this
     */
    public function setTotalPrice(Money $totalPrice);

    /**
     * @param TaxedPrice $taxedPrice
     * @return $this
     */
    public function setTaxedPrice(TaxedPrice $taxedPrice);

    /**
     * @param Address $shippingAddress
     * @return $this
     */
    public function setShippingAddress(Address $shippingAddress);

    /**
     * @param Address $billingAddress
     * @return $this
     */
    public function setBillingAddress(Address $billingAddress);

    /**
     * @param CustomerGroupReference $customerGroup
     * @return $this
     */
    public function setCustomerGroup(CustomerGroupReference $customerGroup);

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country);

    /**
     * @param string $orderState
     * @return $this
     */
    public function setOrderState(string $orderState);

    /**
     * @param string $shipmentState
     * @return $this
     */
    public function setShipmentState(string $shipmentState);

    /**
     * @param string $paymentState
     * @return $this
     */
    public function setPaymentState(string $paymentState);

    /**
     * @param ShippingInfo $shippingInfo
     * @return $this
     */
    public function setShippingInfo(ShippingInfo $shippingInfo);

    /**
     * @param \DateTimeImmutable $completedAt
     * @return $this
     */
    public function setCompletedAt($completedAt);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @param string $inventoryMode
     * @return $this
     */
    public function setInventoryMode(string $inventoryMode);

    /**
     * @param string $taxRoundingMode
     * @return $this
     */
    public function setTaxRoundingMode(string $taxRoundingMode);

}
