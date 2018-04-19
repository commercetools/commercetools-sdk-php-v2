<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Cart\DiscountCodeInfoCollection;
use Commercetools\Types\Cart\CartReference;
use Commercetools\Types\Cart\ShippingRateInput;
use Commercetools\Types\Cart\DiscountCodeInfo;
use Commercetools\Builder\OrderUpdateBuilder;
use Commercetools\Types\Common\Address;
use Commercetools\Types\Cart\LineItemCollection;
use Commercetools\Types\State\StateReference;
use Commercetools\Types\Cart\ShippingInfo;
use Commercetools\Types\Cart\CustomLineItemCollection;
use Commercetools\Types\Cart\LineItem;
use Commercetools\Types\Cart\CustomLineItem;
use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\Money;
use Commercetools\Types\Cart\TaxedPrice;
use Commercetools\Types\Common\Resource;

interface Order extends Resource
{
    const FIELD_COMPLETED_AT = 'completedAt';
    const FIELD_ORDER_NUMBER = 'orderNumber';
    const FIELD_CUSTOMER_ID = 'customerId';
    const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    const FIELD_ANONYMOUS_ID = 'anonymousId';
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    const FIELD_TOTAL_PRICE = 'totalPrice';
    const FIELD_TAXED_PRICE = 'taxedPrice';
    const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    const FIELD_BILLING_ADDRESS = 'billingAddress';
    const FIELD_TAX_MODE = 'taxMode';
    const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_COUNTRY = 'country';
    const FIELD_ORDER_STATE = 'orderState';
    const FIELD_STATE = 'state';
    const FIELD_SHIPMENT_STATE = 'shipmentState';
    const FIELD_PAYMENT_STATE = 'paymentState';
    const FIELD_SHIPPING_INFO = 'shippingInfo';
    const FIELD_SYNC_INFO = 'syncInfo';
    const FIELD_RETURN_INFO = 'returnInfo';
    const FIELD_DISCOUNT_CODES = 'discountCodes';
    const FIELD_LAST_MESSAGE_SEQUENCE_NUMBER = 'lastMessageSequenceNumber';
    const FIELD_CART = 'cart';
    const FIELD_CUSTOM = 'custom';
    const FIELD_PAYMENT_INFO = 'paymentInfo';
    const FIELD_LOCALE = 'locale';
    const FIELD_INVENTORY_MODE = 'inventoryMode';
    const FIELD_ORIGIN = 'origin';
    const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';

    /**
     * @return \DateTimeImmutable
     */
    public function getCompletedAt();

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
     * @return string
     */
    public function getAnonymousId();

    /**
     * @return LineItemCollection
     */
    public function getLineItems();

    /**
     * @return CustomLineItemCollection
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
     * @return string
     */
    public function getTaxMode();

    /**
     * @return string
     */
    public function getTaxRoundingMode();

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
     * @return StateReference
     */
    public function getState();

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
     * @return SyncInfoCollection
     */
    public function getSyncInfo();

    /**
     * @return ReturnInfoCollection
     */
    public function getReturnInfo();

    /**
     * @return DiscountCodeInfoCollection
     */
    public function getDiscountCodes();

    /**
     * @return int
     */
    public function getLastMessageSequenceNumber();

    /**
     * @return CartReference
     */
    public function getCart();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo();

    /**
     * @return string
     */
    public function getLocale();

    /**
     * @return string
     */
    public function getInventoryMode();

    /**
     * @return string
     */
    public function getOrigin();

    /**
     * @return string
     */
    public function getTaxCalculationMode();

    /**
     * @return ShippingRateInput
     */
    public function getShippingRateInput();

    /**
     * @param \DateTimeImmutable $completedAt
     * @return $this
     */
    public function setCompletedAt($completedAt);

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
     * @param string $anonymousId
     * @return $this
     */
    public function setAnonymousId(string $anonymousId);

    /**
     * @param LineItemCollection $lineItems
     * @return $this
     */
    public function setLineItems(LineItemCollection $lineItems);

    /**
     * @param CustomLineItemCollection $customLineItems
     * @return $this
     */
    public function setCustomLineItems(CustomLineItemCollection $customLineItems);

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
     * @param string $taxMode
     * @return $this
     */
    public function setTaxMode(string $taxMode);

    /**
     * @param string $taxRoundingMode
     * @return $this
     */
    public function setTaxRoundingMode(string $taxRoundingMode);

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
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state);

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
     * @param SyncInfoCollection $syncInfo
     * @return $this
     */
    public function setSyncInfo(SyncInfoCollection $syncInfo);

    /**
     * @param ReturnInfoCollection $returnInfo
     * @return $this
     */
    public function setReturnInfo(ReturnInfoCollection $returnInfo);

    /**
     * @param DiscountCodeInfoCollection $discountCodes
     * @return $this
     */
    public function setDiscountCodes(DiscountCodeInfoCollection $discountCodes);

    /**
     * @param int $lastMessageSequenceNumber
     * @return $this
     */
    public function setLastMessageSequenceNumber(int $lastMessageSequenceNumber);

    /**
     * @param CartReference $cart
     * @return $this
     */
    public function setCart(CartReference $cart);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @param PaymentInfo $paymentInfo
     * @return $this
     */
    public function setPaymentInfo(PaymentInfo $paymentInfo);

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale);

    /**
     * @param string $inventoryMode
     * @return $this
     */
    public function setInventoryMode(string $inventoryMode);

    /**
     * @param string $origin
     * @return $this
     */
    public function setOrigin(string $origin);

    /**
     * @param string $taxCalculationMode
     * @return $this
     */
    public function setTaxCalculationMode(string $taxCalculationMode);

    /**
     * @param ShippingRateInput $shippingRateInput
     * @return $this
     */
    public function setShippingRateInput(ShippingRateInput $shippingRateInput);

    /**
     * @return OrderUpdateBuilder
     */
    public function update();
}
