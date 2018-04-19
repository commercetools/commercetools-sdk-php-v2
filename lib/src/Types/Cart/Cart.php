<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Builder\CartUpdateBuilder;
use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Order\PaymentInfo;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\CartDiscount\CartDiscountReference;
use Commercetools\Types\Common\TypedMoney;
use Commercetools\Types\Common\Address;
use Commercetools\Types\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Types\Common\Resource;

interface Cart extends Resource
{
    const FIELD_CUSTOMER_ID = 'customerId';
    const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    const FIELD_ANONYMOUS_ID = 'anonymousId';
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
     * @return TypedMoney
     */
    public function getTotalPrice();

    /**
     * @return TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * @return string
     */
    public function getCartState();

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
    public function getInventoryMode();

    /**
     * @return string
     */
    public function getTaxMode();

    /**
     * @return string
     */
    public function getTaxRoundingMode();

    /**
     * @return string
     */
    public function getTaxCalculationMode();

    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return ShippingInfo
     */
    public function getShippingInfo();

    /**
     * @return DiscountCodeInfoCollection
     */
    public function getDiscountCodes();

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
     * @return int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * @return CartDiscountReferenceCollection
     */
    public function getRefusedGifts();

    /**
     * @return string
     */
    public function getOrigin();

    /**
     * @return ShippingRateInput
     */
    public function getShippingRateInput();

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
     * @param TypedMoney $totalPrice
     * @return $this
     */
    public function setTotalPrice(TypedMoney $totalPrice);

    /**
     * @param TaxedPrice $taxedPrice
     * @return $this
     */
    public function setTaxedPrice(TaxedPrice $taxedPrice);

    /**
     * @param string $cartState
     * @return $this
     */
    public function setCartState(string $cartState);

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
     * @param string $inventoryMode
     * @return $this
     */
    public function setInventoryMode(string $inventoryMode);

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
     * @param string $taxCalculationMode
     * @return $this
     */
    public function setTaxCalculationMode(string $taxCalculationMode);

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
     * @param ShippingInfo $shippingInfo
     * @return $this
     */
    public function setShippingInfo(ShippingInfo $shippingInfo);

    /**
     * @param DiscountCodeInfoCollection $discountCodes
     * @return $this
     */
    public function setDiscountCodes(DiscountCodeInfoCollection $discountCodes);

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
     * @param int $deleteDaysAfterLastModification
     * @return $this
     */
    public function setDeleteDaysAfterLastModification(int $deleteDaysAfterLastModification);

    /**
     * @param CartDiscountReferenceCollection $refusedGifts
     * @return $this
     */
    public function setRefusedGifts(CartDiscountReferenceCollection $refusedGifts);

    /**
     * @param string $origin
     * @return $this
     */
    public function setOrigin(string $origin);

    /**
     * @param ShippingRateInput $shippingRateInput
     * @return $this
     */
    public function setShippingRateInput(ShippingRateInput $shippingRateInput);

    /**
     * @return CartUpdateBuilder
     */
    public function update();
}
