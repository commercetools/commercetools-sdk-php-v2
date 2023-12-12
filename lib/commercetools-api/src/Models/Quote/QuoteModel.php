<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceModel;
use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DirectDiscountCollection;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingInfoModel;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\ShippingRateInputModel;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Cart\TaxedPriceModel;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Order\PaymentInfoModel;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReference;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestReferenceModel;
use Commercetools\Api\Models\StagedQuote\StagedQuoteReference;
use Commercetools\Api\Models\StagedQuote\StagedQuoteReferenceModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class QuoteModel extends JsonObjectModel implements Quote
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     *
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     *
     * @var ?QuoteRequestReference
     */
    protected $quoteRequest;

    /**
     *
     * @var ?StagedQuoteReference
     */
    protected $stagedQuote;

    /**
     *
     * @var ?CustomerReference
     */
    protected $customer;

    /**
     *
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $validTo;

    /**
     *
     * @var ?string
     */
    protected $sellerComment;

    /**
     *
     * @var ?string
     */
    protected $buyerComment;

    /**
     *
     * @var ?StoreKeyReference
     */
    protected $store;

    /**
     *
     * @var ?LineItemCollection
     */
    protected $lineItems;

    /**
     *
     * @var ?CustomLineItemCollection
     */
    protected $customLineItems;

    /**
     *
     * @var ?TypedMoney
     */
    protected $totalPrice;

    /**
     *
     * @var ?TaxedPrice
     */
    protected $taxedPrice;

    /**
     *
     * @var ?Address
     */
    protected $shippingAddress;

    /**
     *
     * @var ?Address
     */
    protected $billingAddress;

    /**
     *
     * @var ?string
     */
    protected $inventoryMode;

    /**
     *
     * @var ?string
     */
    protected $taxMode;

    /**
     *
     * @var ?string
     */
    protected $taxRoundingMode;

    /**
     *
     * @var ?string
     */
    protected $taxCalculationMode;

    /**
     *
     * @var ?string
     */
    protected $country;

    /**
     *
     * @var ?ShippingInfo
     */
    protected $shippingInfo;

    /**
     *
     * @var ?PaymentInfo
     */
    protected $paymentInfo;

    /**
     *
     * @var ?ShippingRateInput
     */
    protected $shippingRateInput;

    /**
     *
     * @var ?AddressCollection
     */
    protected $itemShippingAddresses;

    /**
     *
     * @var ?DirectDiscountCollection
     */
    protected $directDiscounts;

    /**
     *
     * @var ?CustomFields
     */
    protected $custom;

    /**
     *
     * @var ?string
     */
    protected $quoteState;

    /**
     *
     * @var ?StateReference
     */
    protected $state;

    /**
     *
     * @var ?string
     */
    protected $purchaseOrderNumber;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $businessUnit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?string $key = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null,
        ?QuoteRequestReference $quoteRequest = null,
        ?StagedQuoteReference $stagedQuote = null,
        ?CustomerReference $customer = null,
        ?CustomerGroupReference $customerGroup = null,
        ?DateTimeImmutable $validTo = null,
        ?string $sellerComment = null,
        ?string $buyerComment = null,
        ?StoreKeyReference $store = null,
        ?LineItemCollection $lineItems = null,
        ?CustomLineItemCollection $customLineItems = null,
        ?TypedMoney $totalPrice = null,
        ?TaxedPrice $taxedPrice = null,
        ?Address $shippingAddress = null,
        ?Address $billingAddress = null,
        ?string $inventoryMode = null,
        ?string $taxMode = null,
        ?string $taxRoundingMode = null,
        ?string $taxCalculationMode = null,
        ?string $country = null,
        ?ShippingInfo $shippingInfo = null,
        ?PaymentInfo $paymentInfo = null,
        ?ShippingRateInput $shippingRateInput = null,
        ?AddressCollection $itemShippingAddresses = null,
        ?DirectDiscountCollection $directDiscounts = null,
        ?CustomFields $custom = null,
        ?string $quoteState = null,
        ?StateReference $state = null,
        ?string $purchaseOrderNumber = null,
        ?BusinessUnitKeyReference $businessUnit = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->key = $key;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->quoteRequest = $quoteRequest;
        $this->stagedQuote = $stagedQuote;
        $this->customer = $customer;
        $this->customerGroup = $customerGroup;
        $this->validTo = $validTo;
        $this->sellerComment = $sellerComment;
        $this->buyerComment = $buyerComment;
        $this->store = $store;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->shippingAddress = $shippingAddress;
        $this->billingAddress = $billingAddress;
        $this->inventoryMode = $inventoryMode;
        $this->taxMode = $taxMode;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->country = $country;
        $this->shippingInfo = $shippingInfo;
        $this->paymentInfo = $paymentInfo;
        $this->shippingRateInput = $shippingRateInput;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->directDiscounts = $directDiscounts;
        $this->custom = $custom;
        $this->quoteState = $quoteState;
        $this->state = $state;
        $this->purchaseOrderNumber = $purchaseOrderNumber;
        $this->businessUnit = $businessUnit;
    }

    /**
     * <p>Unique identifier of the Quote.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Current version of the Quote.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Quote was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Quote was last updated.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>User-defined unique identifier of the Quote.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>Quote Request related to the Quote.</p>
     *
     *
     * @return null|QuoteRequestReference
     */
    public function getQuoteRequest()
    {
        if (is_null($this->quoteRequest)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_QUOTE_REQUEST);
            if (is_null($data)) {
                return null;
            }

            $this->quoteRequest = QuoteRequestReferenceModel::of($data);
        }

        return $this->quoteRequest;
    }

    /**
     * <p>Staged Quote related to the Quote.</p>
     *
     *
     * @return null|StagedQuoteReference
     */
    public function getStagedQuote()
    {
        if (is_null($this->stagedQuote)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STAGED_QUOTE);
            if (is_null($data)) {
                return null;
            }

            $this->stagedQuote = StagedQuoteReferenceModel::of($data);
        }

        return $this->stagedQuote;
    }

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who owns the Quote.</p>
     *
     *
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>Set automatically when <code>customer</code> is set and the Customer is a member of a Customer Group.
     * Not updated if Customer is changed after Quote creation.
     * Used for Product Variant price selection.</p>
     *
     *
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p>Expiration date for the Quote.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getValidTo()
    {
        if (is_null($this->validTo)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_TO);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validTo = $data;
        }

        return $this->validTo;
    }

    /**
     * <p>Message from the <a href="/../api/quotes-overview#seller">Seller</a> included in the offer.</p>
     *
     *
     * @return null|string
     */
    public function getSellerComment()
    {
        if (is_null($this->sellerComment)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SELLER_COMMENT);
            if (is_null($data)) {
                return null;
            }
            $this->sellerComment = (string) $data;
        }

        return $this->sellerComment;
    }

    /**
     * <p>Message from the <a href="/../api/quotes-overview#buyer">Buyer</a> included in the <a href="ctp:api:type:QuoteRequestQuoteRenegotiationAction">renegotiation request</a>.</p>
     *
     *
     * @return null|string
     */
    public function getBuyerComment()
    {
        if (is_null($this->buyerComment)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_BUYER_COMMENT);
            if (is_null($data)) {
                return null;
            }
            $this->buyerComment = (string) $data;
        }

        return $this->buyerComment;
    }

    /**
     * <p>The Store to which the <a href="/../api/quotes-overview#buyer">Buyer</a> belongs.</p>
     *
     *
     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        if (is_null($this->store)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STORE);
            if (is_null($data)) {
                return null;
            }

            $this->store = StoreKeyReferenceModel::of($data);
        }

        return $this->store;
    }

    /**
     * <p>The Line Items for which the Quote is requested.</p>
     *
     *
     * @return null|LineItemCollection
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->lineItems = LineItemCollection::fromArray($data);
        }

        return $this->lineItems;
    }

    /**
     * <p>The Custom Line Items for which the Quote is requested.</p>
     *
     *
     * @return null|CustomLineItemCollection
     */
    public function getCustomLineItems()
    {
        if (is_null($this->customLineItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CUSTOM_LINE_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItems = CustomLineItemCollection::fromArray($data);
        }

        return $this->customLineItems;
    }

    /**
     * <p>Sum of all <code>totalPrice</code> fields of the <code>lineItems</code> and <code>customLineItems</code>, as well as the <code>price</code> field of <code>shippingInfo</code> (if it exists).
     * <code>totalPrice</code> may or may not include the taxes: it depends on the taxRate.includedInPrice property of each price.</p>
     *
     *
     * @return null|TypedMoney
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->totalPrice = $className::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * <p>Not set until the shipping address is set.
     * Will be set automatically in the <code>Platform</code> TaxMode.
     * For the <code>External</code> tax mode it will be set  as soon as the external tax rates for all line items, custom line items, and shipping in the cart are set.</p>
     *
     *
     * @return null|TaxedPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = TaxedPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    /**
     * <p>Used to determine the eligible <a href="ctp:api:type:ShippingMethod">ShippingMethods</a>
     * and rates as well as the tax rate of the Line Items.</p>
     *
     *
     * @return null|Address
     */
    public function getShippingAddress()
    {
        if (is_null($this->shippingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingAddress = AddressModel::of($data);
        }

        return $this->shippingAddress;
    }

    /**
     * <p>Address used for invoicing.</p>
     *
     *
     * @return null|Address
     */
    public function getBillingAddress()
    {
        if (is_null($this->billingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BILLING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->billingAddress = AddressModel::of($data);
        }

        return $this->billingAddress;
    }

    /**
     * <p>Inventory mode of the Cart referenced in the <a href="ctp:api:type:QuoteRequestDraft">QuoteRequestDraft</a>.</p>
     *
     *
     * @return null|string
     */
    public function getInventoryMode()
    {
        if (is_null($this->inventoryMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INVENTORY_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->inventoryMode = (string) $data;
        }

        return $this->inventoryMode;
    }

    /**
     * <p>Tax mode of the Cart referenced in the <a href="ctp:api:type:QuoteRequestDraft">QuoteRequestDraft</a>.</p>
     *
     *
     * @return null|string
     */
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TAX_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxMode = (string) $data;
        }

        return $this->taxMode;
    }

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for rounding.</p>
     *
     *
     * @return null|string
     */
    public function getTaxRoundingMode()
    {
        if (is_null($this->taxRoundingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TAX_ROUNDING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxRoundingMode = (string) $data;
        }

        return $this->taxRoundingMode;
    }

    /**
     * <p>When calculating taxes for <code>taxedPrice</code>, the selected mode is used for calculating the price with <code>LineItemLevel</code> (horizontally) or <code>UnitPriceLevel</code> (vertically) calculation mode.</p>
     *
     *
     * @return null|string
     */
    public function getTaxCalculationMode()
    {
        if (is_null($this->taxCalculationMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TAX_CALCULATION_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxCalculationMode = (string) $data;
        }

        return $this->taxCalculationMode;
    }

    /**
     * <p>Used for Product Variant price selection.</p>
     *
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p>Set automatically once the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> is set.</p>
     *
     *
     * @return null|ShippingInfo
     */
    public function getShippingInfo()
    {
        if (is_null($this->shippingInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->shippingInfo = ShippingInfoModel::of($data);
        }

        return $this->shippingInfo;
    }

    /**
     * <p>Log of payment transactions related to the Quote.</p>
     *
     *
     * @return null|PaymentInfo
     */
    public function getPaymentInfo()
    {
        if (is_null($this->paymentInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYMENT_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->paymentInfo = PaymentInfoModel::of($data);
        }

        return $this->paymentInfo;
    }

    /**
     * <p>Used to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.</p>
     *
     *
     * @return null|ShippingRateInput
     */
    public function getShippingRateInput()
    {
        if (is_null($this->shippingRateInput)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATE_INPUT);
            if (is_null($data)) {
                return null;
            }
            $className = ShippingRateInputModel::resolveDiscriminatorClass($data);
            $this->shippingRateInput = $className::of($data);
        }

        return $this->shippingRateInput;
    }

    /**
     * <p>Contains addresses for carts with multiple shipping addresses.
     * Line items reference these addresses under their <code>shippingDetails</code>.
     * The addresses captured here are not used to determine eligible shipping methods or the applicable tax rate.
     * Only the cart's <code>shippingAddress</code> is used for this.</p>
     *
     *
     * @return null|AddressCollection
     */
    public function getItemShippingAddresses()
    {
        if (is_null($this->itemShippingAddresses)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ITEM_SHIPPING_ADDRESSES);
            if (is_null($data)) {
                return null;
            }
            $this->itemShippingAddresses = AddressCollection::fromArray($data);
        }

        return $this->itemShippingAddresses;
    }

    /**
     * <p>Discounts that are only valid for the Quote and cannot be associated to any other Cart or Order.</p>
     *
     *
     * @return null|DirectDiscountCollection
     */
    public function getDirectDiscounts()
    {
        if (is_null($this->directDiscounts)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DIRECT_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->directDiscounts = DirectDiscountCollection::fromArray($data);
        }

        return $this->directDiscounts;
    }

    /**
     * <p>Custom Fields on the Quote.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>Predefined states tracking the status of the Quote.</p>
     *
     *
     * @return null|string
     */
    public function getQuoteState()
    {
        if (is_null($this->quoteState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_QUOTE_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->quoteState = (string) $data;
        }

        return $this->quoteState;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the Quote.
     * This reference can point to a State in a custom workflow.</p>
     *
     *
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>The Purchase Order Number is typically set by the <a href="/quotes-overview#buyer">Buyer</a> on a <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> to
     * track the purchase order during the <a href="/../api/quotes-overview#intended-workflow">quote and order flow</a>.</p>
     *
     *
     * @return null|string
     */
    public function getPurchaseOrderNumber()
    {
        if (is_null($this->purchaseOrderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PURCHASE_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->purchaseOrderNumber = (string) $data;
        }

        return $this->purchaseOrderNumber;
    }

    /**
     * <p>The <a href="ctp:api:type:BusinessUnit">BusinessUnit</a> for the Quote.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->businessUnit;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param ?QuoteRequestReference $quoteRequest
     */
    public function setQuoteRequest(?QuoteRequestReference $quoteRequest): void
    {
        $this->quoteRequest = $quoteRequest;
    }

    /**
     * @param ?StagedQuoteReference $stagedQuote
     */
    public function setStagedQuote(?StagedQuoteReference $stagedQuote): void
    {
        $this->stagedQuote = $stagedQuote;
    }

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @param ?DateTimeImmutable $validTo
     */
    public function setValidTo(?DateTimeImmutable $validTo): void
    {
        $this->validTo = $validTo;
    }

    /**
     * @param ?string $sellerComment
     */
    public function setSellerComment(?string $sellerComment): void
    {
        $this->sellerComment = $sellerComment;
    }

    /**
     * @param ?string $buyerComment
     */
    public function setBuyerComment(?string $buyerComment): void
    {
        $this->buyerComment = $buyerComment;
    }

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void
    {
        $this->store = $store;
    }

    /**
     * @param ?LineItemCollection $lineItems
     */
    public function setLineItems(?LineItemCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @param ?CustomLineItemCollection $customLineItems
     */
    public function setCustomLineItems(?CustomLineItemCollection $customLineItems): void
    {
        $this->customLineItems = $customLineItems;
    }

    /**
     * @param ?TypedMoney $totalPrice
     */
    public function setTotalPrice(?TypedMoney $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @param ?TaxedPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }

    /**
     * @param ?Address $shippingAddress
     */
    public function setShippingAddress(?Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @param ?Address $billingAddress
     */
    public function setBillingAddress(?Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }

    /**
     * @param ?string $taxRoundingMode
     */
    public function setTaxRoundingMode(?string $taxRoundingMode): void
    {
        $this->taxRoundingMode = $taxRoundingMode;
    }

    /**
     * @param ?string $taxCalculationMode
     */
    public function setTaxCalculationMode(?string $taxCalculationMode): void
    {
        $this->taxCalculationMode = $taxCalculationMode;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param ?ShippingInfo $shippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo): void
    {
        $this->shippingInfo = $shippingInfo;
    }

    /**
     * @param ?PaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void
    {
        $this->paymentInfo = $paymentInfo;
    }

    /**
     * @param ?ShippingRateInput $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }

    /**
     * @param ?AddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }

    /**
     * @param ?DirectDiscountCollection $directDiscounts
     */
    public function setDirectDiscounts(?DirectDiscountCollection $directDiscounts): void
    {
        $this->directDiscounts = $directDiscounts;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?string $quoteState
     */
    public function setQuoteState(?string $quoteState): void
    {
        $this->quoteState = $quoteState;
    }

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): void
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;
    }

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Quote::FIELD_CREATED_AT]) && $data[Quote::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Quote::FIELD_CREATED_AT] = $data[Quote::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Quote::FIELD_LAST_MODIFIED_AT]) && $data[Quote::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Quote::FIELD_LAST_MODIFIED_AT] = $data[Quote::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Quote::FIELD_VALID_TO]) && $data[Quote::FIELD_VALID_TO] instanceof \DateTimeImmutable) {
            $data[Quote::FIELD_VALID_TO] = $data[Quote::FIELD_VALID_TO]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
