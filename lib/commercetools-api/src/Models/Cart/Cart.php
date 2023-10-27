<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Cart extends BaseResource
{
    public const FIELD_KEY = 'key';
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_STORE = 'store';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    public const FIELD_TOTAL_LINE_ITEM_QUANTITY = 'totalLineItemQuantity';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TAXED_SHIPPING_PRICE = 'taxedShippingPrice';
    public const FIELD_DISCOUNT_ON_TOTAL_PRICE = 'discountOnTotalPrice';
    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_CART_STATE = 'cartState';
    public const FIELD_BILLING_ADDRESS = 'billingAddress';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_SHIPPING_MODE = 'shippingMode';
    public const FIELD_SHIPPING_KEY = 'shippingKey';
    public const FIELD_SHIPPING_INFO = 'shippingInfo';
    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    public const FIELD_SHIPPING_CUSTOM_FIELDS = 'shippingCustomFields';
    public const FIELD_SHIPPING = 'shipping';
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';
    public const FIELD_DISCOUNT_CODES = 'discountCodes';
    public const FIELD_DIRECT_DISCOUNTS = 'directDiscounts';
    public const FIELD_REFUSED_GIFTS = 'refusedGifts';
    public const FIELD_PAYMENT_INFO = 'paymentInfo';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION = 'deleteDaysAfterLastModification';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';

    /**
     * <p>Unique identifier of the Cart.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Cart.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-defined unique identifier of the Cart.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> that the Cart belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerId();

    /**
     * <p>Email address of the Customer that the Cart belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Customer Group of the Customer that the Cart belongs to. Used for <a href="ctp:api:type:LineItemPriceSelection">LineItem Price selection</a>.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Cart.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Business Unit the Cart belongs to.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Store the Cart belongs to.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * <p><a href="ctp:api:type:LineItems">Line Items</a> added to the Cart.</p>
     *

     * @return null|LineItemCollection
     */
    public function getLineItems();

    /**
     * <p><a href="ctp:api:type:CustomLineItems">Custom Line Items</a> added to the Cart.</p>
     *

     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems();

    /**
     * <p>Sum of all <a href="ctp:api:type:LineItem">LineItem</a> quantities, excluding <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>. Only present when the Cart has at least one LineItem.</p>
     *

     * @return null|int
     */
    public function getTotalLineItemQuantity();

    /**
     * <p>Sum of the <code>totalPrice</code> field of all <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>, and if available, the <code>price</code> field of <a href="ctp:api:type:ShippingInfo">ShippingInfo</a>.
     * If a discount applies on <code>totalPrice</code>, this field holds the discounted value.</p>
     * <p>Taxes are included if <a href="ctp:api:type:TaxRate">TaxRate</a> <code>includedInPrice</code> is <code>true</code> for each price.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getTotalPrice();

    /**
     * <ul>
     * <li>For a Cart with <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, it is automatically set when a <a href="ctp:api:type:CartSetShippingAddressAction">shipping address is set</a>.</li>
     * <li>For a Cart with <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, it is automatically set when <code>shippingAddress</code> and external Tax Rates for all Line Items, Custom Line Items, and Shipping Methods in the Cart are set.</li>
     * </ul>
     * <p>If a discount applies on <code>totalPrice</code>, this field holds the discounted values.</p>
     *

     * @return null|TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Sum of the <code>taxedPrice</code> field of <a href="ctp:api:type:ShippingInfo">ShippingInfo</a> across all Shipping Methods.</p>
     *

     * @return null|TaxedPrice
     */
    public function getTaxedShippingPrice();

    /**
     * <p>Discounts that apply on the Cart <code>totalPrice</code>.</p>
     *

     * @return null|DiscountOnTotalPrice
     */
    public function getDiscountOnTotalPrice();

    /**
     * <p>Indicates how Tax Rates are set.</p>
     *

     * @return null|string
     */
    public function getTaxMode();

    /**
     * <p>Indicates how monetary values are rounded when calculating taxes for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode();

    /**
     * <p>Indicates how taxes are calculated when calculating taxes for <code>taxedPrice</code>.</p>
     *

     * @return null|string
     */
    public function getTaxCalculationMode();

    /**
     * <p>Indicates how stock quantities are tracked for Line Items in the Cart.</p>
     *

     * @return null|string
     */
    public function getInventoryMode();

    /**
     * <p>Current status of the Cart.</p>
     *

     * @return null|string
     */
    public function getCartState();

    /**
     * <p>Billing address associated with the Cart.</p>
     *

     * @return null|Address
     */
    public function getBillingAddress();

    /**
     * <p>Shipping address associated with the Cart. Determines eligible <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> rates and Tax Rates of Line Items.</p>
     *

     * @return null|Address
     */
    public function getShippingAddress();

    /**
     * <p>Indicates whether the Cart has one or multiple Shipping Methods.</p>
     *

     * @return null|string
     */
    public function getShippingMode();

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * <p>Shipping-related information of a Cart with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. Automatically set when a <a href="ctp:api:type:CartSetShippingMethodAction">Shipping Method is set</a>.</p>
     *

     * @return null|ShippingInfo
     */
    public function getShippingInfo();

    /**
     * <p>Input used to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.
     * The data type of this field depends on the <code>shippingRateInputType.type</code> configured in the <a href="ctp:api:type:Project">Project</a>:</p>
     * <ul>
     * <li>If <code>CartClassification</code>, it is <a href="ctp:api:type:ClassificationShippingRateInput">ClassificationShippingRateInput</a>.</li>
     * <li>If <code>CartScore</code>, it is <a href="ctp:api:type:ScoreShippingRateInput">ScoreShippingRateInput</a>.</li>
     * <li>If <code>CartValue</code>, it cannot be used.</li>
     * </ul>
     *

     * @return null|ShippingRateInput
     */
    public function getShippingRateInput();

    /**
     * <p>Custom Fields of the Shipping Method in a Cart with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|CustomFields
     */
    public function getShippingCustomFields();

    /**
     * <p>Shipping-related information of a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. Updated automatically each time a new <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a>.</p>
     *

     * @return null|ShippingCollection
     */
    public function getShipping();

    /**
     * <p>Additional shipping addresses of the Cart as specified by <a href="ctp:api:type:LineItem">LineItems</a> using the <code>shippingDetails</code> field.</p>
     * <p>Eligible Shipping Methods or applicable Tax Rates are determined by the address in <code>shippingAddress</code>, and not <code>itemShippingAddresses</code>.</p>
     *

     * @return null|AddressCollection
     */
    public function getItemShippingAddresses();

    /**
     * <p>Discount Codes applied to the Cart. A Cart that has <code>directDiscounts</code> cannot have <code>discountCodes</code>.</p>
     *

     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes();

    /**
     * <p>Direct Discounts added to the Cart. A Cart that has <code>discountCodes</code> cannot have <code>directDiscounts</code>.</p>
     *

     * @return null|DirectDiscountCollection
     */
    public function getDirectDiscounts();

    /**
     * <p>Automatically set when a Line Item with <code>GiftLineItem</code> <a href="ctp:api:type:LineItemMode">LineItemMode</a> is <a href="ctp:api:type:CartRemoveLineItemAction">removed</a> from the Cart.</p>
     *

     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts();

    /**
     * <p>Payment information related to the Cart.</p>
     *

     * @return null|PaymentInfo
     */
    public function getPaymentInfo();

    /**
     * <p>Used for <a href="ctp:api:type:LineItemPriceSelection">LineItem Price selection</a>.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Languages of the Cart. Can only contain languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * <p>Indicates how the Cart was created.</p>
     *

     * @return null|string
     */
    public function getOrigin();

    /**
     * <p>Custom Fields of the Cart.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Number of days after which an active Cart is deleted since its last modification. Configured in <a href="ctp:api:type:CartsConfiguration">Project settings</a>.</p>
     *

     * @return null|int
     */
    public function getDeleteDaysAfterLastModification();

    /**
     * <p>Date and time (UTC) the Cart was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Cart was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void;

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void;

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void;

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;

    /**
     * @param ?LineItemCollection $lineItems
     */
    public function setLineItems(?LineItemCollection $lineItems): void;

    /**
     * @param ?CustomLineItemCollection $customLineItems
     */
    public function setCustomLineItems(?CustomLineItemCollection $customLineItems): void;

    /**
     * @param ?int $totalLineItemQuantity
     */
    public function setTotalLineItemQuantity(?int $totalLineItemQuantity): void;

    /**
     * @param ?CentPrecisionMoney $totalPrice
     */
    public function setTotalPrice(?CentPrecisionMoney $totalPrice): void;

    /**
     * @param ?TaxedPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;

    /**
     * @param ?TaxedPrice $taxedShippingPrice
     */
    public function setTaxedShippingPrice(?TaxedPrice $taxedShippingPrice): void;

    /**
     * @param ?DiscountOnTotalPrice $discountOnTotalPrice
     */
    public function setDiscountOnTotalPrice(?DiscountOnTotalPrice $discountOnTotalPrice): void;

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void;

    /**
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void;

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void;

    /**
     * @param ?string $cartState
     */
    public function setCartState(?string $cartState): void;

    /**
     * @param ?Address $billingAddress
     */
    public function setBillingAddress(?Address $billingAddress): void;

    /**
     * @param ?Address $shippingAddress
     */
    public function setShippingAddress(?Address $shippingAddress): void;

    /**
     * @param ?string $shippingMode
     */
    public function setShippingMode(?string $shippingMode): void;

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;

    /**
     * @param ?ShippingInfo $shippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo): void;

    /**
     * @param ?ShippingRateInput $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;

    /**
     * @param ?CustomFields $shippingCustomFields
     */
    public function setShippingCustomFields(?CustomFields $shippingCustomFields): void;

    /**
     * @param ?ShippingCollection $shipping
     */
    public function setShipping(?ShippingCollection $shipping): void;

    /**
     * @param ?AddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;

    /**
     * @param ?DiscountCodeInfoCollection $discountCodes
     */
    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void;

    /**
     * @param ?DirectDiscountCollection $directDiscounts
     */
    public function setDirectDiscounts(?DirectDiscountCollection $directDiscounts): void;

    /**
     * @param ?CartDiscountReferenceCollection $refusedGifts
     */
    public function setRefusedGifts(?CartDiscountReferenceCollection $refusedGifts): void;

    /**
     * @param ?PaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;
}
