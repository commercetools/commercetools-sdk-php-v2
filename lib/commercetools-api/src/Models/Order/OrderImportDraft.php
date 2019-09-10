<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\CustomLineItemDraftCollection;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
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
     * @return LineItemImportDraftCollection|null
     */
    public function getLineItems();
    
    /**
     *
     * @return CustomLineItemDraftCollection|null
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
     * @return CustomerGroupResourceIdentifier|null
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
     * @return ShippingInfoImportDraft|null
     */
    public function getShippingInfo();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getCompletedAt();
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return string|null
     */
    public function getInventoryMode();
    
    /**
     *
     * @return string|null
     */
    public function getTaxRoundingMode();
    
    /**
     *
     * @return AddressCollection|null
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