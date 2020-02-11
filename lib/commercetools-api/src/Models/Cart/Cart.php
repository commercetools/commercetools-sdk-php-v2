<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Cart extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_STORE = 'store';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_CART_STATE = 'cartState';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_BILLING_ADDRESS = 'billingAddress';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_SHIPPING_INFO = 'shippingInfo';
    public const FIELD_DISCOUNT_CODES = 'discountCodes';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_PAYMENT_INFO = 'paymentInfo';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    public const FIELD_REFUSED_GIFTS = 'refusedGifts';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';

    /**
     * <p>The unique ID of the cart.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the cart.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|string
     */
    public function getCustomerId();

    /**
     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p>Identifies carts and orders belonging to an anonymous session (the customer has not signed up/in yet).</p>
     *
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * @return null|LineItemCollection
     */
    public function getLineItems();

    /**
     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems();

    /**
     * <p>The sum of all <code>totalPrice</code> fields of the <code>lineItems</code> and <code>customLineItems</code>, as well as the <code>price</code> field of <code>shippingInfo</code> (if it exists).
     * <code>totalPrice</code> may or may not include the taxes: it depends on the taxRate.includedInPrice property of each price.</p>
     *
     * @return null|TypedMoney
     */
    public function getTotalPrice();

    /**
     * <p>Not set until the shipping address is set.
     * Will be set automatically in the <code>Platform</code> TaxMode.
     * For the <code>External</code> tax mode it will be set  as soon as the external tax rates for all line items, custom line items, and shipping in the cart are set.</p>
     *
     * @return null|TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * @return null|string
     */
    public function getCartState();

    /**
     * <p>The shipping address is used to determine the eligible shipping methods and rates as well as the tax rate of the line items.</p>
     *
     * @return null|Address
     */
    public function getShippingAddress();

    /**
     * @return null|Address
     */
    public function getBillingAddress();

    /**
     * @return null|string
     */
    public function getInventoryMode();

    /**
     * @return null|string
     */
    public function getTaxMode();

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for rounding.</p>
     *
     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for calculating the price with <code>LineItemLevel</code> (horizontally) or <code>UnitPriceLevel</code> (vertically) calculation mode.</p>
     *
     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * <p>Set automatically when the customer is set and the customer is a member of a customer group.
     * Used for product variant
     * price selection.</p>
     *
     * @return null|CustomerGroupReference
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
     * <p>Set automatically once the ShippingMethod is set.</p>
     *
     * @return null|ShippingInfo
     */
    public function getShippingInfo();

    /**
     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|PaymentInfo
     */
    public function getPaymentInfo();

    /**
     * @return null|string
     */
    public function getLocale();

    /**
     * <p>The cart will be deleted automatically if it hasn't been modified for the specified amount of days and it is in the <code>Active</code> CartState.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * <p>Automatically filled when a line item with LineItemMode <code>GiftLineItem</code> is removed from the cart.</p>
     *
     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts();

    /**
     * <p>The origin field indicates how this cart was created.
     * The value <code>Customer</code> indicates, that the cart was created by the customer.</p>
     *
     * @return null|string
     */
    public function getOrigin();

    /**
     * <p>The shippingRateInput is used as an input to select a ShippingRatePriceTier.</p>
     *
     * @return null|ShippingRateInput
     */
    public function getShippingRateInput();

    /**
     * <p>Contains addresses for carts with multiple shipping addresses.
     * Line items reference these addresses under their <code>shippingDetails</code>.
     * The addresses captured here are not used to determine eligible shipping methods or the applicable tax rate.
     * Only the cart's <code>shippingAddress</code> is used for this.</p>
     *
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

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
