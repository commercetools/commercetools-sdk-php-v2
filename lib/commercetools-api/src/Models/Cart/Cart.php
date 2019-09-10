<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFields;

interface Cart extends LoggedResource
{
    
    const FIELD_CUSTOMER_ID = 'customerId';
    const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    const FIELD_ANONYMOUS_ID = 'anonymousId';
    const FIELD_STORE = 'store';
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    const FIELD_TOTAL_PRICE = 'totalPrice';
    const FIELD_TAXED_PRICE = 'taxedPrice';
    const FIELD_CART_STATE = 'cartState';
    const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    const FIELD_BILLING_ADDRESS = 'billingAddress';
    const FIELD_INVENTORY_MODE = 'inventoryMode';
    const FIELD_TAX_MODE = 'taxMode';
    const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_COUNTRY = 'country';
    const FIELD_SHIPPING_INFO = 'shippingInfo';
    const FIELD_DISCOUNT_CODES = 'discountCodes';
    const FIELD_CUSTOM = 'custom';
    const FIELD_PAYMENT_INFO = 'paymentInfo';
    const FIELD_LOCALE = 'locale';
    const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    const FIELD_REFUSED_GIFTS = 'refusedGifts';
    const FIELD_ORIGIN = 'origin';
    const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';

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
     * @return TypedMoney|null
     */
    public function getTotalPrice();
    
    /**
     *
     * @return TaxedPrice|null
     */
    public function getTaxedPrice();
    
    /**
     *
     * @return string|null
     */
    public function getCartState();
    
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
    public function getInventoryMode();
    
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
     * @return string|null
     */
    public function getTaxCalculationMode();
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    public function getCustomerGroup();
    
    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     * @return string|null
     */
    public function getCountry();
    
    /**
     *
     * @return ShippingInfo|null
     */
    public function getShippingInfo();
    
    /**
     *
     * @return DiscountCodeInfoCollection|null
     */
    public function getDiscountCodes();
    
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
     * @return int|null
     */
    public function getDeleteDaysAfterLastModification();
    
    /**
     *
     * @return CartDiscountReferenceCollection|null
     */
    public function getRefusedGifts();
    
    /**
     *
     * @return string|null
     */
    public function getOrigin();
    
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
    public function setCustomerId(?string $customerId): void;
    
    public function setCustomerEmail(?string $customerEmail): void;
    
    public function setAnonymousId(?string $anonymousId): void;
    
    public function setStore(?StoreKeyReference $store): void;
    
    public function setLineItems(?LineItemCollection $lineItems): void;
    
    public function setCustomLineItems(?CustomLineItemCollection $customLineItems): void;
    
    public function setTotalPrice(?TypedMoney $totalPrice): void;
    
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;
    
    public function setCartState(?string $cartState): void;
    
    public function setShippingAddress(?Address $shippingAddress): void;
    
    public function setBillingAddress(?Address $billingAddress): void;
    
    public function setInventoryMode(?string $inventoryMode): void;
    
    public function setTaxMode(?string $taxMode): void;
    
    public function setTaxRoundingMode(?string $taxRoundingMode): void;
    
    public function setTaxCalculationMode(?string $taxCalculationMode): void;
    
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;
    
    public function setCountry(?string $country): void;
    
    public function setShippingInfo(?ShippingInfo $shippingInfo): void;
    
    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void;
    
    public function setCustom(?CustomFields $custom): void;
    
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void;
    
    public function setLocale(?string $locale): void;
    
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;
    
    public function setRefusedGifts(?CartDiscountReferenceCollection $refusedGifts): void;
    
    public function setOrigin(?string $origin): void;
    
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;
    
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;
}