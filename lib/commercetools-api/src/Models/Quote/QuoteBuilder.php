<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceBuilder;
use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DirectDiscountCollection;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingInfoBuilder;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\ShippingRateInputBuilder;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Cart\TaxedPriceBuilder;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Order\PaymentInfoBuilder;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReference;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReferenceBuilder;
use Commercetools\Api\Models\StagedQuote\StagedQuoteReference;
use Commercetools\Api\Models\StagedQuote\StagedQuoteReferenceBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<Quote>
 */
final class QuoteBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**

     * @var null|QuoteRequestReference|QuoteRequestReferenceBuilder
     */
    private $quoteRequest;

    /**

     * @var null|StagedQuoteReference|StagedQuoteReferenceBuilder
     */
    private $stagedQuote;

    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $customer;

    /**

     * @var null|CustomerGroupReference|CustomerGroupReferenceBuilder
     */
    private $customerGroup;

    /**

     * @var ?DateTimeImmutable
     */
    private $validTo;

    /**

     * @var ?string
     */
    private $sellerComment;

    /**

     * @var ?string
     */
    private $buyerComment;

    /**

     * @var null|StoreKeyReference|StoreKeyReferenceBuilder
     */
    private $store;

    /**

     * @var ?LineItemCollection
     */
    private $lineItems;

    /**

     * @var ?CustomLineItemCollection
     */
    private $customLineItems;

    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $totalPrice;

    /**

     * @var null|TaxedPrice|TaxedPriceBuilder
     */
    private $taxedPrice;

    /**

     * @var null|Address|AddressBuilder
     */
    private $shippingAddress;

    /**

     * @var null|Address|AddressBuilder
     */
    private $billingAddress;

    /**

     * @var ?string
     */
    private $inventoryMode;

    /**

     * @var ?string
     */
    private $taxMode;

    /**

     * @var ?string
     */
    private $taxRoundingMode;

    /**

     * @var ?string
     */
    private $taxCalculationMode;

    /**

     * @var ?string
     */
    private $country;

    /**

     * @var null|ShippingInfo|ShippingInfoBuilder
     */
    private $shippingInfo;

    /**

     * @var null|PaymentInfo|PaymentInfoBuilder
     */
    private $paymentInfo;

    /**

     * @var null|ShippingRateInput|ShippingRateInputBuilder
     */
    private $shippingRateInput;

    /**

     * @var ?AddressCollection
     */
    private $itemShippingAddresses;

    /**

     * @var ?DirectDiscountCollection
     */
    private $directDiscounts;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**

     * @var ?string
     */
    private $quoteState;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $state;

    /**

     * @var ?string
     */
    private $purchaseOrderNumber;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $businessUnit;

    /**
     * <p>Unique identifier of the Quote.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the Quote.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Quote was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Quote was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>User-defined unique identifier of the Quote.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>Quote Request related to the Quote.</p>
     *

     * @return null|QuoteRequestReference
     */
    public function getQuoteRequest()
    {
        return $this->quoteRequest instanceof QuoteRequestReferenceBuilder ? $this->quoteRequest->build() : $this->quoteRequest;
    }

    /**
     * <p>Staged Quote related to the Quote.</p>
     *

     * @return null|StagedQuoteReference
     */
    public function getStagedQuote()
    {
        return $this->stagedQuote instanceof StagedQuoteReferenceBuilder ? $this->stagedQuote->build() : $this->stagedQuote;
    }

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who owns the Quote.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Set automatically when <code>customer</code> is set and the Customer is a member of a Customer Group.
     * Not updated if Customer is changed after Quote creation.
     * Used for Product Variant price selection.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>Expiration date for the Quote.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * <p>Message from the <a href="/../api/quotes-overview#seller">Seller</a> included in the offer.</p>
     *

     * @return null|string
     */
    public function getSellerComment()
    {
        return $this->sellerComment;
    }

    /**
     * <p>Message from the <a href="/../api/quotes-overview#buyer">Buyer</a> included in the <a href="ctp:api:type:QuoteRequestQuoteRenegotiationAction">renegotiation request</a>.</p>
     *

     * @return null|string
     */
    public function getBuyerComment()
    {
        return $this->buyerComment;
    }

    /**
     * <p>The Store to which the <a href="/../api/quotes-overview#buyer">Buyer</a> belongs.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        return $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store;
    }

    /**
     * <p>The Line Items for which the Quote is requested.</p>
     *

     * @return null|LineItemCollection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * <p>The Custom Line Items for which the Quote is requested.</p>
     *

     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems()
    {
        return $this->customLineItems;
    }

    /**
     * <p>Sum of all <code>totalPrice</code> fields of the <code>lineItems</code> and <code>customLineItems</code>, as well as the <code>price</code> field of <code>shippingInfo</code> (if it exists).
     * <code>totalPrice</code> may or may not include the taxes: it depends on the taxRate.includedInPrice property of each price.</p>
     *

     * @return null|TypedMoney
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * <p>Not set until the shipping address is set.
     * Will be set automatically in the <code>Platform</code> TaxMode.
     * For the <code>External</code> tax mode it will be set  as soon as the external tax rates for all line items, custom line items, and shipping in the cart are set.</p>
     *

     * @return null|TaxedPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
    }

    /**
     * <p>Used to determine the eligible <a href="ctp:api:type:ShippingMethod">ShippingMethods</a>
     * and rates as well as the tax rate of the Line Items.</p>
     *

     * @return null|Address
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress;
    }

    /**
     * <p>Address used for invoicing.</p>
     *

     * @return null|Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress;
    }

    /**
     * <p>Inventory mode of the Cart referenced in the <a href="ctp:api:type:QuoteRequestDraft">QuoteRequestDraft</a>.</p>
     *

     * @return null|string
     */
    public function getInventoryMode()
    {
        return $this->inventoryMode;
    }

    /**
     * <p>Tax mode of the Cart referenced in the <a href="ctp:api:type:QuoteRequestDraft">QuoteRequestDraft</a>.</p>
     *

     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for rounding.</p>
     *

     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        return $this->taxRoundingMode;
    }

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for calculating the price with <code>LineItemLevel</code> (horizontally) or <code>UnitPriceLevel</code> (vertically) calculation mode.</p>
     *

     * @return null|string
     */
    public function getTaxCalculationMode()
    {
        return $this->taxCalculationMode;
    }

    /**
     * <p>Used for Product Variant price selection.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>Set automatically once the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> is set.</p>
     *

     * @return null|ShippingInfo
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo;
    }

    /**
     * <p>Log of payment transactions related to the Quote.</p>
     *

     * @return null|PaymentInfo
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo instanceof PaymentInfoBuilder ? $this->paymentInfo->build() : $this->paymentInfo;
    }

    /**
     * <p>Used to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.</p>
     *

     * @return null|ShippingRateInput
     */
    public function getShippingRateInput()
    {
        return $this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput;
    }

    /**
     * <p>Contains addresses for carts with multiple shipping addresses.
     * Line items reference these addresses under their <code>shippingDetails</code>.
     * The addresses captured here are not used to determine eligible shipping methods or the applicable tax rate.
     * Only the cart's <code>shippingAddress</code> is used for this.</p>
     *

     * @return null|AddressCollection
     */
    public function getItemShippingAddresses()
    {
        return $this->itemShippingAddresses;
    }

    /**
     * <p>Discounts that are only valid for the Quote and cannot be associated to any other Cart or Order.</p>
     *

     * @return null|DirectDiscountCollection
     */
    public function getDirectDiscounts()
    {
        return $this->directDiscounts;
    }

    /**
     * <p>Custom Fields on the Quote.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Predefined states tracking the status of the Quote.</p>
     *

     * @return null|string
     */
    public function getQuoteState()
    {
        return $this->quoteState;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the Quote.
     * This reference can point to a State in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState()
    {
        return $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>The Purchase Order Number is typically set by the <a href="/quotes-overview#buyer">Buyer</a> on a <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> to
     * track the purchase order during the <a href="/../api/quotes-overview#intended-workflow">quote and order flow</a>.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * <p>The <a href="ctp:api:type:BusinessUnit">BusinessUnit</a> for the Quote.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @param ?QuoteRequestReference $quoteRequest
     * @return $this
     */
    public function withQuoteRequest(?QuoteRequestReference $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;

        return $this;
    }

    /**
     * @param ?StagedQuoteReference $stagedQuote
     * @return $this
     */
    public function withStagedQuote(?StagedQuoteReference $stagedQuote)
    {
        $this->stagedQuote = $stagedQuote;

        return $this;
    }

    /**
     * @param ?CustomerReference $customer
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?CustomerGroupReference $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validTo
     * @return $this
     */
    public function withValidTo(?DateTimeImmutable $validTo)
    {
        $this->validTo = $validTo;

        return $this;
    }

    /**
     * @param ?string $sellerComment
     * @return $this
     */
    public function withSellerComment(?string $sellerComment)
    {
        $this->sellerComment = $sellerComment;

        return $this;
    }

    /**
     * @param ?string $buyerComment
     * @return $this
     */
    public function withBuyerComment(?string $buyerComment)
    {
        $this->buyerComment = $buyerComment;

        return $this;
    }

    /**
     * @param ?StoreKeyReference $store
     * @return $this
     */
    public function withStore(?StoreKeyReference $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @param ?LineItemCollection $lineItems
     * @return $this
     */
    public function withLineItems(?LineItemCollection $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @param ?CustomLineItemCollection $customLineItems
     * @return $this
     */
    public function withCustomLineItems(?CustomLineItemCollection $customLineItems)
    {
        $this->customLineItems = $customLineItems;

        return $this;
    }

    /**
     * @param ?TypedMoney $totalPrice
     * @return $this
     */
    public function withTotalPrice(?TypedMoney $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @param ?TaxedPrice $taxedPrice
     * @return $this
     */
    public function withTaxedPrice(?TaxedPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @param ?Address $shippingAddress
     * @return $this
     */
    public function withShippingAddress(?Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @param ?Address $billingAddress
     * @return $this
     */
    public function withBillingAddress(?Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @param ?string $inventoryMode
     * @return $this
     */
    public function withInventoryMode(?string $inventoryMode)
    {
        $this->inventoryMode = $inventoryMode;

        return $this;
    }

    /**
     * @param ?string $taxMode
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

        return $this;
    }

    /**
     * @param ?string $taxRoundingMode
     * @return $this
     */
    public function withTaxRoundingMode(?string $taxRoundingMode)
    {
        $this->taxRoundingMode = $taxRoundingMode;

        return $this;
    }

    /**
     * @param ?string $taxCalculationMode
     * @return $this
     */
    public function withTaxCalculationMode(?string $taxCalculationMode)
    {
        $this->taxCalculationMode = $taxCalculationMode;

        return $this;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param ?ShippingInfo $shippingInfo
     * @return $this
     */
    public function withShippingInfo(?ShippingInfo $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @param ?PaymentInfo $paymentInfo
     * @return $this
     */
    public function withPaymentInfo(?PaymentInfo $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * @param ?ShippingRateInput $shippingRateInput
     * @return $this
     */
    public function withShippingRateInput(?ShippingRateInput $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @param ?AddressCollection $itemShippingAddresses
     * @return $this
     */
    public function withItemShippingAddresses(?AddressCollection $itemShippingAddresses)
    {
        $this->itemShippingAddresses = $itemShippingAddresses;

        return $this;
    }

    /**
     * @param ?DirectDiscountCollection $directDiscounts
     * @return $this
     */
    public function withDirectDiscounts(?DirectDiscountCollection $directDiscounts)
    {
        $this->directDiscounts = $directDiscounts;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?string $quoteState
     * @return $this
     */
    public function withQuoteState(?string $quoteState)
    {
        $this->quoteState = $quoteState;

        return $this;
    }

    /**
     * @param ?StateReference $state
     * @return $this
     */
    public function withState(?StateReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?string $purchaseOrderNumber
     * @return $this
     */
    public function withPurchaseOrderNumber(?string $purchaseOrderNumber)
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;

        return $this;
    }

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitKeyReference $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withQuoteRequest() instead
     * @return $this
     */
    public function withQuoteRequestBuilder(?QuoteRequestReferenceBuilder $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;

        return $this;
    }

    /**
     * @deprecated use withStagedQuote() instead
     * @return $this
     */
    public function withStagedQuoteBuilder(?StagedQuoteReferenceBuilder $stagedQuote)
    {
        $this->stagedQuote = $stagedQuote;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroup() instead
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @deprecated use withStore() instead
     * @return $this
     */
    public function withStoreBuilder(?StoreKeyReferenceBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @deprecated use withTotalPrice() instead
     * @return $this
     */
    public function withTotalPriceBuilder(?TypedMoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @deprecated use withTaxedPrice() instead
     * @return $this
     */
    public function withTaxedPriceBuilder(?TaxedPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @deprecated use withShippingAddress() instead
     * @return $this
     */
    public function withShippingAddressBuilder(?AddressBuilder $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @deprecated use withBillingAddress() instead
     * @return $this
     */
    public function withBillingAddressBuilder(?AddressBuilder $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @deprecated use withShippingInfo() instead
     * @return $this
     */
    public function withShippingInfoBuilder(?ShippingInfoBuilder $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;

        return $this;
    }

    /**
     * @deprecated use withPaymentInfo() instead
     * @return $this
     */
    public function withPaymentInfoBuilder(?PaymentInfoBuilder $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * @deprecated use withShippingRateInput() instead
     * @return $this
     */
    public function withShippingRateInputBuilder(?ShippingRateInputBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitKeyReferenceBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    public function build(): Quote
    {
        return new QuoteModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->key,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->quoteRequest instanceof QuoteRequestReferenceBuilder ? $this->quoteRequest->build() : $this->quoteRequest,
            $this->stagedQuote instanceof StagedQuoteReferenceBuilder ? $this->stagedQuote->build() : $this->stagedQuote,
            $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->validTo,
            $this->sellerComment,
            $this->buyerComment,
            $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store,
            $this->lineItems,
            $this->customLineItems,
            $this->totalPrice instanceof TypedMoneyBuilder ? $this->totalPrice->build() : $this->totalPrice,
            $this->taxedPrice instanceof TaxedPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice,
            $this->shippingAddress instanceof AddressBuilder ? $this->shippingAddress->build() : $this->shippingAddress,
            $this->billingAddress instanceof AddressBuilder ? $this->billingAddress->build() : $this->billingAddress,
            $this->inventoryMode,
            $this->taxMode,
            $this->taxRoundingMode,
            $this->taxCalculationMode,
            $this->country,
            $this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo,
            $this->paymentInfo instanceof PaymentInfoBuilder ? $this->paymentInfo->build() : $this->paymentInfo,
            $this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput,
            $this->itemShippingAddresses,
            $this->directDiscounts,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->quoteState,
            $this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state,
            $this->purchaseOrderNumber,
            $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit
        );
    }

    public static function of(): QuoteBuilder
    {
        return new self();
    }
}
