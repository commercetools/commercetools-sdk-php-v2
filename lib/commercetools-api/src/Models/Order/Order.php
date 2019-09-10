<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DiscountCodeInfoCollection;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\OrderEdit\StagedOrder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface Order extends LoggedResource
{
    
    const FIELD_COMPLETED_AT = 'completedAt';
    const FIELD_ORDER_NUMBER = 'orderNumber';
    const FIELD_CUSTOMER_ID = 'customerId';
    const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    const FIELD_ANONYMOUS_ID = 'anonymousId';
    const FIELD_STORE = 'store';
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
    const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';

    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getCompletedAt();
    
    /**
     *
     * @return string|null
     */
    public function getOrderNumber();
    
    /**
     *
     * @return string|null
     */
    public function getCustomerId();
    
    /**
     *
     * @return string|null
     */
    public function getCustomerEmail();
    
    /**
     *
     * @return string|null
     */
    public function getAnonymousId();
    
    /**
     *
     * @return StoreKeyReference|null
     */
    public function getStore();
    
    /**
     *
     * @return LineItemCollection|null
     */
    public function getLineItems();
    
    /**
     *
     * @return CustomLineItemCollection|null
     */
    public function getCustomLineItems();
    
    /**
     *
     * @return Money|null
     */
    public function getTotalPrice();
    
    /**
     *
     * @return TaxedPrice|null
     */
    public function getTaxedPrice();
    
    /**
     *
     * @return Address|null
     */
    public function getShippingAddress();
    
    /**
     *
     * @return Address|null
     */
    public function getBillingAddress();
    
    /**
     *
     * @return string|null
     */
    public function getTaxMode();
    
    /**
     *
     * @return string|null
     */
    public function getTaxRoundingMode();
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    public function getCustomerGroup();
    
    /**
     *
     * @return string|null
     */
    public function getCountry();
    
    /**
     *
     * @return string|null
     */
    public function getOrderState();
    
    /**
     *
     * @return StateReference|null
     */
    public function getState();
    
    /**
     *
     * @return string|null
     */
    public function getShipmentState();
    
    /**
     *
     * @return string|null
     */
    public function getPaymentState();
    
    /**
     *
     * @return ShippingInfo|null
     */
    public function getShippingInfo();
    
    /**
     *
     * @return SyncInfoCollection|null
     */
    public function getSyncInfo();
    
    /**
     *
     * @return ReturnInfoCollection|null
     */
    public function getReturnInfo();
    
    /**
     *
     * @return DiscountCodeInfoCollection|null
     */
    public function getDiscountCodes();
    
    /**
     *
     * @return int|null
     */
    public function getLastMessageSequenceNumber();
    
    /**
     *
     * @return CartReference|null
     */
    public function getCart();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    
    /**
     *
     * @return PaymentInfo|null
     */
    public function getPaymentInfo();
    
    /**
     *
     * @return string|null
     */
    public function getLocale();
    
    /**
     *
     * @return string|null
     */
    public function getInventoryMode();
    
    /**
     *
     * @return string|null
     */
    public function getOrigin();
    
    /**
     *
     * @return string|null
     */
    public function getTaxCalculationMode();
    
    /**
     *
     * @return ShippingRateInput|null
     */
    public function getShippingRateInput();
    
    /**
     *
     * @return AddressCollection|null
     */
    public function getItemShippingAddresses();
    public function setCompletedAt(?DateTimeImmutable $completedAt): void;
    
    public function setOrderNumber(?string $orderNumber): void;
    
    public function setCustomerId(?string $customerId): void;
    
    public function setCustomerEmail(?string $customerEmail): void;
    
    public function setAnonymousId(?string $anonymousId): void;
    
    public function setStore(?StoreKeyReference $store): void;
    
    public function setLineItems(?LineItemCollection $lineItems): void;
    
    public function setCustomLineItems(?CustomLineItemCollection $customLineItems): void;
    
    public function setTotalPrice(?Money $totalPrice): void;
    
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;
    
    public function setShippingAddress(?Address $shippingAddress): void;
    
    public function setBillingAddress(?Address $billingAddress): void;
    
    public function setTaxMode(?string $taxMode): void;
    
    public function setTaxRoundingMode(?string $taxRoundingMode): void;
    
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;
    
    public function setCountry(?string $country): void;
    
    public function setOrderState(?string $orderState): void;
    
    public function setState(?StateReference $state): void;
    
    public function setShipmentState(?string $shipmentState): void;
    
    public function setPaymentState(?string $paymentState): void;
    
    public function setShippingInfo(?ShippingInfo $shippingInfo): void;
    
    public function setSyncInfo(?SyncInfoCollection $syncInfo): void;
    
    public function setReturnInfo(?ReturnInfoCollection $returnInfo): void;
    
    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void;
    
    public function setLastMessageSequenceNumber(?int $lastMessageSequenceNumber): void;
    
    public function setCart(?CartReference $cart): void;
    
    public function setCustom(?CustomFields $custom): void;
    
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void;
    
    public function setLocale(?string $locale): void;
    
    public function setInventoryMode(?string $inventoryMode): void;
    
    public function setOrigin(?string $origin): void;
    
    public function setTaxCalculationMode(?string $taxCalculationMode): void;
    
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;
    
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;
}