<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DirectDiscountCollection;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReference;
use Commercetools\Api\Models\StagedQuote\StagedQuoteReference;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Quote extends BaseResource
{
    public const FIELD_KEY = 'key';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_QUOTE_REQUEST = 'quoteRequest';
    public const FIELD_STAGED_QUOTE = 'stagedQuote';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_VALID_TO = 'validTo';
    public const FIELD_SELLER_COMMENT = 'sellerComment';
    public const FIELD_BUYER_COMMENT = 'buyerComment';
    public const FIELD_STORE = 'store';
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_CUSTOM_LINE_ITEMS = 'customLineItems';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_SHIPPING_ADDRESS = 'shippingAddress';
    public const FIELD_BILLING_ADDRESS = 'billingAddress';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';
    public const FIELD_TAX_MODE = 'taxMode';
    public const FIELD_PRICE_ROUNDING_MODE = 'priceRoundingMode';
    public const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';
    public const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_SHIPPING_INFO = 'shippingInfo';
    public const FIELD_PAYMENT_INFO = 'paymentInfo';
    public const FIELD_SHIPPING_RATE_INPUT = 'shippingRateInput';
    public const FIELD_ITEM_SHIPPING_ADDRESSES = 'itemShippingAddresses';
    public const FIELD_DIRECT_DISCOUNTS = 'directDiscounts';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_QUOTE_STATE = 'quoteState';
    public const FIELD_STATE = 'state';
    public const FIELD_PURCHASE_ORDER_NUMBER = 'purchaseOrderNumber';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';

    /**
     * <p>Unique identifier of the Quote.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Quote.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-defined unique identifier of the Quote.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Date and time (UTC) the Quote was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Quote was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the Quote.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the Quote.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Quote Request related to the Quote.</p>
     *

     * @return null|QuoteRequestReference
     */
    public function getQuoteRequest();

    /**
     * <p>Staged Quote related to the Quote.</p>
     *

     * @return null|StagedQuoteReference
     */
    public function getStagedQuote();

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who owns the Quote.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p>Set automatically when <code>customer</code> is set and the Customer is a member of a Customer Group.
     * Not updated if Customer is changed after Quote creation.
     * Used for Product Variant price selection.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p>Expiration date for the Quote. Once a Quote expires, it cannot be ordered.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidTo();

    /**
     * <p>Message from the <a href="/../api/quotes-overview#seller">Seller</a> included in the offer.</p>
     *

     * @return null|string
     */
    public function getSellerComment();

    /**
     * <p>Message from the <a href="/../api/quotes-overview#buyer">Buyer</a> included in the <a href="ctp:api:type:QuoteRequestQuoteRenegotiationAction">renegotiation request</a>.</p>
     *

     * @return null|string
     */
    public function getBuyerComment();

    /**
     * <p>The Store to which the <a href="/../api/quotes-overview#buyer">Buyer</a> belongs.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * <p>The Line Items for which the Quote is requested.</p>
     *

     * @return null|LineItemCollection
     */
    public function getLineItems();

    /**
     * <p>The Custom Line Items for which the Quote is requested.</p>
     *

     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems();

    /**
     * <p>Sum of all <code>totalPrice</code> fields of the <code>lineItems</code> and <code>customLineItems</code>, as well as the <code>price</code> field of <code>shippingInfo</code> (if it exists).
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
     * <p>Used to determine the eligible <a href="ctp:api:type:ShippingMethod">ShippingMethods</a>
     * and rates as well as the tax rate of the Line Items.</p>
     *

     * @return null|Address
     */
    public function getShippingAddress();

    /**
     * <p>Address used for invoicing.</p>
     *

     * @return null|Address
     */
    public function getBillingAddress();

    /**
     * <p>Inventory mode of the Cart referenced in the <a href="ctp:api:type:QuoteRequestDraft">QuoteRequestDraft</a>.</p>
     *

     * @return null|string
     */
    public function getInventoryMode();

    /**
     * <p>Tax mode of the Cart referenced in the <a href="ctp:api:type:QuoteRequestDraft">QuoteRequestDraft</a>.</p>
     *

     * @return null|string
     */
    public function getTaxMode();

    /**
     * <p>When calculating total prices on <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>, the selected mode is used for rounding.</p>
     *

     * @return null|string
     */
    public function getPriceRoundingMode();

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
     * <p>Used for Product Variant price selection.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Set automatically once the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> is set.</p>
     *

     * @return null|ShippingInfo
     */
    public function getShippingInfo();

    /**
     * <p>Log of payment transactions related to the Quote.</p>
     *

     * @return null|PaymentInfo
     */
    public function getPaymentInfo();

    /**
     * <p>Used to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.</p>
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

    /**
     * <p>Discounts that are only valid for the Quote and cannot be associated to any other Cart or Order.</p>
     *

     * @return null|DirectDiscountCollection
     */
    public function getDirectDiscounts();

    /**
     * <p>Custom Fields on the Quote.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Predefined states tracking the status of the Quote.</p>
     *

     * @return null|string
     */
    public function getQuoteState();

    /**
     * <p><a href="ctp:api:type:State">State</a> of the Quote.
     * This reference can point to a State in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**
     * <p>The Purchase Order Number is typically set by the <a href="/quotes-overview#buyer">Buyer</a> on a <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> to
     * track the purchase order during the <a href="/../api/quotes-overview#intended-workflow">quote and order flow</a>.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber();

    /**
     * <p>The <a href="ctp:api:type:BusinessUnit">BusinessUnit</a> for the Quote. Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit();

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

    /**
     * @param ?QuoteRequestReference $quoteRequest
     */
    public function setQuoteRequest(?QuoteRequestReference $quoteRequest): void;

    /**
     * @param ?StagedQuoteReference $stagedQuote
     */
    public function setStagedQuote(?StagedQuoteReference $stagedQuote): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    /**
     * @param ?DateTimeImmutable $validTo
     */
    public function setValidTo(?DateTimeImmutable $validTo): void;

    /**
     * @param ?string $sellerComment
     */
    public function setSellerComment(?string $sellerComment): void;

    /**
     * @param ?string $buyerComment
     */
    public function setBuyerComment(?string $buyerComment): void;

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
     * @param ?TypedMoney $totalPrice
     */
    public function setTotalPrice(?TypedMoney $totalPrice): void;

    /**
     * @param ?TaxedPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;

    /**
     * @param ?Address $shippingAddress
     */
    public function setShippingAddress(?Address $shippingAddress): void;

    /**
     * @param ?Address $billingAddress
     */
    public function setBillingAddress(?Address $billingAddress): void;

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void;

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;

    /**
     * @param ?string $priceRoundingMode
     */
    public function setPriceRoundingMode(?string $priceRoundingMode): void;

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void;

    /**
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?ShippingInfo $shippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo): void;

    /**
     * @param ?PaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void;

    /**
     * @param ?ShippingRateInput $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void;

    /**
     * @param ?AddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void;

    /**
     * @param ?DirectDiscountCollection $directDiscounts
     */
    public function setDirectDiscounts(?DirectDiscountCollection $directDiscounts): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?string $quoteState
     */
    public function setQuoteState(?string $quoteState): void;

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;

    /**
     * @param ?string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): void;

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void;
}
