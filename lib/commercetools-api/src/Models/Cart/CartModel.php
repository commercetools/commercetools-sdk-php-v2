<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceModel;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CentPrecisionMoneyModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Order\PaymentInfoModel;
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
final class CartModel extends JsonObjectModel implements Cart
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
     * @var ?string
     */
    protected $customerId;

    /**
     *
     * @var ?string
     */
    protected $customerEmail;

    /**
     *
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    /**
     *
     * @var ?string
     */
    protected $anonymousId;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $businessUnit;

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
     * @var ?int
     */
    protected $totalLineItemQuantity;

    /**
     *
     * @var ?CentPrecisionMoney
     */
    protected $totalPrice;

    /**
     *
     * @var ?TaxedPrice
     */
    protected $taxedPrice;

    /**
     *
     * @var ?TaxedPrice
     */
    protected $taxedShippingPrice;

    /**
     *
     * @var ?DiscountOnTotalPrice
     */
    protected $discountOnTotalPrice;

    /**
     *
     * @var ?string
     */
    protected $taxMode;

    /**
     *
     * @var ?string
     */
    protected $priceRoundingMode;

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
    protected $inventoryMode;

    /**
     *
     * @var ?string
     */
    protected $cartState;

    /**
     *
     * @var ?Address
     */
    protected $billingAddress;

    /**
     *
     * @var ?Address
     */
    protected $shippingAddress;

    /**
     *
     * @var ?string
     */
    protected $shippingMode;

    /**
     *
     * @var ?string
     */
    protected $shippingKey;

    /**
     *
     * @var ?ShippingInfo
     */
    protected $shippingInfo;

    /**
     *
     * @var ?ShippingRateInput
     */
    protected $shippingRateInput;

    /**
     *
     * @var ?CustomFields
     */
    protected $shippingCustomFields;

    /**
     *
     * @var ?ShippingCollection
     */
    protected $shipping;

    /**
     *
     * @var ?AddressCollection
     */
    protected $itemShippingAddresses;

    /**
     *
     * @var ?DiscountCodeInfoCollection
     */
    protected $discountCodes;

    /**
     *
     * @var ?DirectDiscountCollection
     */
    protected $directDiscounts;

    /**
     *
     * @var ?CartDiscountReferenceCollection
     */
    protected $refusedGifts;

    /**
     *
     * @var ?PaymentInfo
     */
    protected $paymentInfo;

    /**
     *
     * @var ?string
     */
    protected $country;

    /**
     *
     * @var ?string
     */
    protected $locale;

    /**
     *
     * @var ?string
     */
    protected $origin;

    /**
     *
     * @var ?CustomFields
     */
    protected $custom;

    /**
     *
     * @var ?DiscountTypeCombination
     */
    protected $discountTypeCombination;

    /**
     *
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?string $key = null,
        ?string $customerId = null,
        ?string $customerEmail = null,
        ?CustomerGroupReference $customerGroup = null,
        ?string $anonymousId = null,
        ?BusinessUnitKeyReference $businessUnit = null,
        ?StoreKeyReference $store = null,
        ?LineItemCollection $lineItems = null,
        ?CustomLineItemCollection $customLineItems = null,
        ?int $totalLineItemQuantity = null,
        ?CentPrecisionMoney $totalPrice = null,
        ?TaxedPrice $taxedPrice = null,
        ?TaxedPrice $taxedShippingPrice = null,
        ?DiscountOnTotalPrice $discountOnTotalPrice = null,
        ?string $taxMode = null,
        ?string $priceRoundingMode = null,
        ?string $taxRoundingMode = null,
        ?string $taxCalculationMode = null,
        ?string $inventoryMode = null,
        ?string $cartState = null,
        ?Address $billingAddress = null,
        ?Address $shippingAddress = null,
        ?string $shippingMode = null,
        ?string $shippingKey = null,
        ?ShippingInfo $shippingInfo = null,
        ?ShippingRateInput $shippingRateInput = null,
        ?CustomFields $shippingCustomFields = null,
        ?ShippingCollection $shipping = null,
        ?AddressCollection $itemShippingAddresses = null,
        ?DiscountCodeInfoCollection $discountCodes = null,
        ?DirectDiscountCollection $directDiscounts = null,
        ?CartDiscountReferenceCollection $refusedGifts = null,
        ?PaymentInfo $paymentInfo = null,
        ?string $country = null,
        ?string $locale = null,
        ?string $origin = null,
        ?CustomFields $custom = null,
        ?DiscountTypeCombination $discountTypeCombination = null,
        ?int $deleteDaysAfterLastModification = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->key = $key;
        $this->customerId = $customerId;
        $this->customerEmail = $customerEmail;
        $this->customerGroup = $customerGroup;
        $this->anonymousId = $anonymousId;
        $this->businessUnit = $businessUnit;
        $this->store = $store;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->totalLineItemQuantity = $totalLineItemQuantity;
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->taxedShippingPrice = $taxedShippingPrice;
        $this->discountOnTotalPrice = $discountOnTotalPrice;
        $this->taxMode = $taxMode;
        $this->priceRoundingMode = $priceRoundingMode;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->inventoryMode = $inventoryMode;
        $this->cartState = $cartState;
        $this->billingAddress = $billingAddress;
        $this->shippingAddress = $shippingAddress;
        $this->shippingMode = $shippingMode;
        $this->shippingKey = $shippingKey;
        $this->shippingInfo = $shippingInfo;
        $this->shippingRateInput = $shippingRateInput;
        $this->shippingCustomFields = $shippingCustomFields;
        $this->shipping = $shipping;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->discountCodes = $discountCodes;
        $this->directDiscounts = $directDiscounts;
        $this->refusedGifts = $refusedGifts;
        $this->paymentInfo = $paymentInfo;
        $this->country = $country;
        $this->locale = $locale;
        $this->origin = $origin;
        $this->custom = $custom;
        $this->discountTypeCombination = $discountTypeCombination;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
    }

    /**
     * <p>Unique identifier of the Cart.</p>
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
     * <p>Current version of the Cart.</p>
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
     * <p>Date and time (UTC) the Cart was initially created.</p>
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
     * <p>Date and time (UTC) the Cart was last updated.</p>
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
     * <p>User-defined unique identifier of the Cart.</p>
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
     * <p><code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> that the Cart belongs to.</p>
     *
     *
     * @return null|string
     */
    public function getCustomerId()
    {
        if (is_null($this->customerId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOMER_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customerId = (string) $data;
        }

        return $this->customerId;
    }

    /**
     * <p>Email address of the Customer that the Cart belongs to.</p>
     *
     *
     * @return null|string
     */
    public function getCustomerEmail()
    {
        if (is_null($this->customerEmail)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOMER_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->customerEmail = (string) $data;
        }

        return $this->customerEmail;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Customer Group of the Customer that the Cart belongs to. Used for <a href="/../api/pricing-and-discounts-overview#line-item-price-selection">Line Item price selection</a>.</p>
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
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Cart.</p>
     *
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Business Unit the Cart belongs to. Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects.</p>
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
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Store the Cart belongs to.</p>
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
     * <p><a href="ctp:api:type:LineItems">Line Items</a> added to the Cart.</p>
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
     * <p><a href="ctp:api:type:CustomLineItems">Custom Line Items</a> added to the Cart.</p>
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
     * <p>Sum of all <a href="ctp:api:type:LineItem">LineItem</a> quantities, excluding <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>. Only present when the Cart has at least one LineItem.</p>
     *
     *
     * @return null|int
     */
    public function getTotalLineItemQuantity()
    {
        if (is_null($this->totalLineItemQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TOTAL_LINE_ITEM_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->totalLineItemQuantity = (int) $data;
        }

        return $this->totalLineItemQuantity;
    }

    /**
     * <p>Sum of the <code>totalPrice</code> field of all <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>, and if available, the <code>price</code> field of <a href="ctp:api:type:ShippingInfo">ShippingInfo</a>.
     * If a discount applies on <code>totalPrice</code>, this field holds the discounted value.</p>
     * <p>Taxes are included if <a href="ctp:api:type:TaxRate">TaxRate</a> <code>includedInPrice</code> is <code>true</code> for each price.</p>
     *
     *
     * @return null|CentPrecisionMoney
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->totalPrice = CentPrecisionMoneyModel::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * <ul>
     * <li>For a Cart with <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, it is automatically set when a <a href="ctp:api:type:CartSetShippingAddressAction">shipping address is set</a>. For Carts with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>, all Line Items and Custom Line Items must be fully distributed between the Shipping Methods (via <code>shippingDetails</code>), otherwise <code>taxedPrice</code> is not automatically set.</li>
     * <li>For a Cart with <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, it is automatically set when <code>shippingAddress</code> and external Tax Rates for all Line Items, Custom Line Items, and Shipping Methods in the Cart are set. For Carts with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>, all allocations must have their respective tax rates present in <code>perMethodTaxRate</code>, otherwise <code>taxedPrice</code> is not automatically set.</li>
     * </ul>
     * <p>If a discount applies on <code>totalPrice</code>, this field holds the discounted values.</p>
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
     * <p>Sum of the <code>taxedPrice</code> field of <a href="ctp:api:type:ShippingInfo">ShippingInfo</a> across all Shipping Methods.</p>
     *
     *
     * @return null|TaxedPrice
     */
    public function getTaxedShippingPrice()
    {
        if (is_null($this->taxedShippingPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAXED_SHIPPING_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedShippingPrice = TaxedPriceModel::of($data);
        }

        return $this->taxedShippingPrice;
    }

    /**
     * <p>Discounts that apply on the Cart <code>totalPrice</code>.</p>
     *
     *
     * @return null|DiscountOnTotalPrice
     */
    public function getDiscountOnTotalPrice()
    {
        if (is_null($this->discountOnTotalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT_ON_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->discountOnTotalPrice = DiscountOnTotalPriceModel::of($data);
        }

        return $this->discountOnTotalPrice;
    }

    /**
     * <p>Indicates how Tax Rates are set.</p>
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
     * <p>Indicates how the total prices on <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a> are rounded when calculated. Configured in <a href="ctp:api:type:CartsConfiguration">Project settings</a>.</p>
     *
     *
     * @return null|string
     */
    public function getPriceRoundingMode()
    {
        if (is_null($this->priceRoundingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_ROUNDING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->priceRoundingMode = (string) $data;
        }

        return $this->priceRoundingMode;
    }

    /**
     * <p>Indicates how monetary values are rounded when calculating taxes for <code>taxedPrice</code>. Configured in <a href="ctp:api:type:CartsConfiguration">Project settings</a>.</p>
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
     * <p>Indicates how taxes are calculated when calculating taxes for <code>taxedPrice</code>.</p>
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
     * <p>Indicates how stock quantities are tracked for Line Items in the Cart.</p>
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
     * <p>Current status of the Cart.</p>
     *
     *
     * @return null|string
     */
    public function getCartState()
    {
        if (is_null($this->cartState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CART_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->cartState = (string) $data;
        }

        return $this->cartState;
    }

    /**
     * <p>Billing address associated with the Cart.</p>
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
     * <p>Shipping address for a Cart with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. Determines eligible <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> rates and Tax Rates of Line Items.</p>
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
     * <p>Indicates whether the Cart has one or multiple Shipping Methods.</p>
     *
     *
     * @return null|string
     */
    public function getShippingMode()
    {
        if (is_null($this->shippingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMode = (string) $data;
        }

        return $this->shippingMode;
    }

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *
     *
     * @return null|string
     */
    public function getShippingKey()
    {
        if (is_null($this->shippingKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->shippingKey = (string) $data;
        }

        return $this->shippingKey;
    }

    /**
     * <p>Shipping-related information of a Cart with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. Automatically set when a <a href="ctp:api:type:CartSetShippingMethodAction">Shipping Method is set</a>.</p>
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
     * <p>Input used to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.
     * The data type of this field depends on the <code>shippingRateInputType.type</code> configured in the <a href="ctp:api:type:Project">Project</a>:</p>
     * <ul>
     * <li>If <code>CartClassification</code>, it is <a href="ctp:api:type:ClassificationShippingRateInput">ClassificationShippingRateInput</a>.</li>
     * <li>If <code>CartScore</code>, it is <a href="ctp:api:type:ScoreShippingRateInput">ScoreShippingRateInput</a>.</li>
     * <li>If <code>CartValue</code>, it cannot be used.</li>
     * </ul>
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
     * <p>Custom Fields of the Shipping Method in a Cart with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getShippingCustomFields()
    {
        if (is_null($this->shippingCustomFields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_CUSTOM_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingCustomFields = CustomFieldsModel::of($data);
        }

        return $this->shippingCustomFields;
    }

    /**
     * <p>Shipping-related information of a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. Updated automatically each time a new <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a>.</p>
     *
     *
     * @return null|ShippingCollection
     */
    public function getShipping()
    {
        if (is_null($this->shipping)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SHIPPING);
            if (is_null($data)) {
                return null;
            }
            $this->shipping = ShippingCollection::fromArray($data);
        }

        return $this->shipping;
    }

    /**
     * <p>Additional shipping addresses of the Cart as specified by <a href="ctp:api:type:LineItem">LineItems</a> using the <code>shippingDetails</code> field.</p>
     * <p>For Carts with <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>: eligible Shipping Methods or applicable Tax Rates are determined by the address in <code>shippingAddress</code>, and not <code>itemShippingAddresses</code>.</p>
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
     * <p>Discount Codes applied to the Cart. A Cart that has <code>directDiscounts</code> cannot have <code>discountCodes</code>.</p>
     *
     *
     * @return null|DiscountCodeInfoCollection
     */
    public function getDiscountCodes()
    {
        if (is_null($this->discountCodes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DISCOUNT_CODES);
            if (is_null($data)) {
                return null;
            }
            $this->discountCodes = DiscountCodeInfoCollection::fromArray($data);
        }

        return $this->discountCodes;
    }

    /**
     * <p>Direct Discounts added to the Cart. A Cart that has <code>discountCodes</code> cannot have <code>directDiscounts</code>.</p>
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
     * <p>Automatically set when a Line Item with <code>GiftLineItem</code> <a href="ctp:api:type:LineItemMode">LineItemMode</a> is <a href="ctp:api:type:CartRemoveLineItemAction">removed</a> from the Cart.</p>
     *
     *
     * @return null|CartDiscountReferenceCollection
     */
    public function getRefusedGifts()
    {
        if (is_null($this->refusedGifts)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REFUSED_GIFTS);
            if (is_null($data)) {
                return null;
            }
            $this->refusedGifts = CartDiscountReferenceCollection::fromArray($data);
        }

        return $this->refusedGifts;
    }

    /**
     * <p>Payment information related to the Cart.</p>
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
     * <p>Used for <a href="/../api/pricing-and-discounts-overview#line-item-price-selection">Line Item price selection</a>.</p>
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
     * <p>Languages of the Cart. Can only contain languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
     *
     *
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    /**
     * <p>Indicates how the Cart was created.</p>
     *
     *
     * @return null|string
     */
    public function getOrigin()
    {
        if (is_null($this->origin)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORIGIN);
            if (is_null($data)) {
                return null;
            }
            $this->origin = (string) $data;
        }

        return $this->origin;
    }

    /**
     * <p>Custom Fields of the Cart.</p>
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
     * <p>Indicates if a combination of discount types can apply on a Cart.</p>
     *
     *
     * @return null|DiscountTypeCombination
     */
    public function getDiscountTypeCombination()
    {
        if (is_null($this->discountTypeCombination)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT_TYPE_COMBINATION);
            if (is_null($data)) {
                return null;
            }
            $className = DiscountTypeCombinationModel::resolveDiscriminatorClass($data);
            $this->discountTypeCombination = $className::of($data);
        }

        return $this->discountTypeCombination;
    }

    /**
     * <p>Number of days after the last modification before a Cart is deleted. Configured in <a href="ctp:api:type:CartsConfiguration">Project settings</a>.</p>
     *
     *
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterLastModification = (int) $data;
        }

        return $this->deleteDaysAfterLastModification;
    }

    /**
     * <p>IDs and references that last modified the Cart.</p>
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
     * <p>IDs and references that created the Cart.</p>
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
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void
    {
        $this->customerEmail = $customerEmail;
    }

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
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
     * @param ?int $totalLineItemQuantity
     */
    public function setTotalLineItemQuantity(?int $totalLineItemQuantity): void
    {
        $this->totalLineItemQuantity = $totalLineItemQuantity;
    }

    /**
     * @param ?CentPrecisionMoney $totalPrice
     */
    public function setTotalPrice(?CentPrecisionMoney $totalPrice): void
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
     * @param ?TaxedPrice $taxedShippingPrice
     */
    public function setTaxedShippingPrice(?TaxedPrice $taxedShippingPrice): void
    {
        $this->taxedShippingPrice = $taxedShippingPrice;
    }

    /**
     * @param ?DiscountOnTotalPrice $discountOnTotalPrice
     */
    public function setDiscountOnTotalPrice(?DiscountOnTotalPrice $discountOnTotalPrice): void
    {
        $this->discountOnTotalPrice = $discountOnTotalPrice;
    }

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }

    /**
     * @param ?string $priceRoundingMode
     */
    public function setPriceRoundingMode(?string $priceRoundingMode): void
    {
        $this->priceRoundingMode = $priceRoundingMode;
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
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    /**
     * @param ?string $cartState
     */
    public function setCartState(?string $cartState): void
    {
        $this->cartState = $cartState;
    }

    /**
     * @param ?Address $billingAddress
     */
    public function setBillingAddress(?Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @param ?Address $shippingAddress
     */
    public function setShippingAddress(?Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @param ?string $shippingMode
     */
    public function setShippingMode(?string $shippingMode): void
    {
        $this->shippingMode = $shippingMode;
    }

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void
    {
        $this->shippingKey = $shippingKey;
    }

    /**
     * @param ?ShippingInfo $shippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo): void
    {
        $this->shippingInfo = $shippingInfo;
    }

    /**
     * @param ?ShippingRateInput $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }

    /**
     * @param ?CustomFields $shippingCustomFields
     */
    public function setShippingCustomFields(?CustomFields $shippingCustomFields): void
    {
        $this->shippingCustomFields = $shippingCustomFields;
    }

    /**
     * @param ?ShippingCollection $shipping
     */
    public function setShipping(?ShippingCollection $shipping): void
    {
        $this->shipping = $shipping;
    }

    /**
     * @param ?AddressCollection $itemShippingAddresses
     */
    public function setItemShippingAddresses(?AddressCollection $itemShippingAddresses): void
    {
        $this->itemShippingAddresses = $itemShippingAddresses;
    }

    /**
     * @param ?DiscountCodeInfoCollection $discountCodes
     */
    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void
    {
        $this->discountCodes = $discountCodes;
    }

    /**
     * @param ?DirectDiscountCollection $directDiscounts
     */
    public function setDirectDiscounts(?DirectDiscountCollection $directDiscounts): void
    {
        $this->directDiscounts = $directDiscounts;
    }

    /**
     * @param ?CartDiscountReferenceCollection $refusedGifts
     */
    public function setRefusedGifts(?CartDiscountReferenceCollection $refusedGifts): void
    {
        $this->refusedGifts = $refusedGifts;
    }

    /**
     * @param ?PaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void
    {
        $this->paymentInfo = $paymentInfo;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?DiscountTypeCombination $discountTypeCombination
     */
    public function setDiscountTypeCombination(?DiscountTypeCombination $discountTypeCombination): void
    {
        $this->discountTypeCombination = $discountTypeCombination;
    }

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
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


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Cart::FIELD_CREATED_AT]) && $data[Cart::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Cart::FIELD_CREATED_AT] = $data[Cart::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Cart::FIELD_LAST_MODIFIED_AT]) && $data[Cart::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Cart::FIELD_LAST_MODIFIED_AT] = $data[Cart::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
