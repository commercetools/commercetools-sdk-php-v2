<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceModel;
use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceModel;
use Commercetools\Api\Models\Cart\CustomLineItemCollection;
use Commercetools\Api\Models\Cart\DirectDiscountCollection;
use Commercetools\Api\Models\Cart\DiscountCodeInfoCollection;
use Commercetools\Api\Models\Cart\DiscountOnTotalPrice;
use Commercetools\Api\Models\Cart\DiscountOnTotalPriceModel;
use Commercetools\Api\Models\Cart\LineItemCollection;
use Commercetools\Api\Models\Cart\ShippingCollection;
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingInfoModel;
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\ShippingRateInputModel;
use Commercetools\Api\Models\Cart\TaxedPrice;
use Commercetools\Api\Models\Cart\TaxedPriceModel;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressCollection;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderModel;
use Commercetools\Api\Models\Order\PaymentInfo;
use Commercetools\Api\Models\Order\PaymentInfoModel;
use Commercetools\Api\Models\Order\ReturnInfoCollection;
use Commercetools\Api\Models\Order\SyncInfoCollection;
use Commercetools\Api\Models\Quote\QuoteReference;
use Commercetools\Api\Models\Quote\QuoteReferenceModel;
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
final class StagedOrderModel extends JsonObjectModel implements StagedOrder
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
    protected $orderNumber;

    /**
     *
     * @var ?string
     */
    protected $purchaseOrderNumber;

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
     * @var ?CartReference
     */
    protected $cart;

    /**
     *
     * @var ?QuoteReference
     */
    protected $quote;

    /**
     *
     * @var ?string
     */
    protected $orderState;

    /**
     *
     * @var ?string
     */
    protected $shipmentState;

    /**
     *
     * @var ?string
     */
    protected $paymentState;

    /**
     *
     * @var ?StateReference
     */
    protected $state;

    /**
     *
     * @var ?SyncInfoCollection
     */
    protected $syncInfo;

    /**
     *
     * @var ?ReturnInfoCollection
     */
    protected $returnInfo;

    /**
     * @deprecated
     * @var ?int
     */
    protected $lastMessageSequenceNumber;

    /**
     *
     * @var ?CustomFields
     */
    protected $custom;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $completedAt;

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
        ?string $orderNumber = null,
        ?string $purchaseOrderNumber = null,
        ?string $customerId = null,
        ?string $customerEmail = null,
        ?CustomerGroupReference $customerGroup = null,
        ?string $anonymousId = null,
        ?BusinessUnitKeyReference $businessUnit = null,
        ?StoreKeyReference $store = null,
        ?LineItemCollection $lineItems = null,
        ?CustomLineItemCollection $customLineItems = null,
        ?TypedMoney $totalPrice = null,
        ?TaxedPrice $taxedPrice = null,
        ?TaxedPrice $taxedShippingPrice = null,
        ?DiscountOnTotalPrice $discountOnTotalPrice = null,
        ?string $taxMode = null,
        ?string $taxRoundingMode = null,
        ?string $taxCalculationMode = null,
        ?string $inventoryMode = null,
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
        ?CartReference $cart = null,
        ?QuoteReference $quote = null,
        ?string $orderState = null,
        ?string $shipmentState = null,
        ?string $paymentState = null,
        ?StateReference $state = null,
        ?SyncInfoCollection $syncInfo = null,
        ?ReturnInfoCollection $returnInfo = null,
        ?int $lastMessageSequenceNumber = null,
        ?CustomFields $custom = null,
        ?DateTimeImmutable $completedAt = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->orderNumber = $orderNumber;
        $this->purchaseOrderNumber = $purchaseOrderNumber;
        $this->customerId = $customerId;
        $this->customerEmail = $customerEmail;
        $this->customerGroup = $customerGroup;
        $this->anonymousId = $anonymousId;
        $this->businessUnit = $businessUnit;
        $this->store = $store;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->taxedShippingPrice = $taxedShippingPrice;
        $this->discountOnTotalPrice = $discountOnTotalPrice;
        $this->taxMode = $taxMode;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->inventoryMode = $inventoryMode;
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
        $this->cart = $cart;
        $this->quote = $quote;
        $this->orderState = $orderState;
        $this->shipmentState = $shipmentState;
        $this->paymentState = $paymentState;
        $this->state = $state;
        $this->syncInfo = $syncInfo;
        $this->returnInfo = $returnInfo;
        $this->lastMessageSequenceNumber = $lastMessageSequenceNumber;
        $this->custom = $custom;
        $this->completedAt = $completedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
    }

    /**
     * <p>Unique identifier of the Order.</p>
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
     * <p>Current version of the Order.</p>
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
     * <p>Date and time (UTC) the Order was initially created.</p>
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
     * <p>Date and time (UTC) the Order was last updated.</p>
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
     * <p>User-defined identifier of the Order that is unique across a Project.</p>
     *
     *
     * @return null|string
     */
    public function getOrderNumber()
    {
        if (is_null($this->orderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->orderNumber = (string) $data;
        }

        return $this->orderNumber;
    }

    /**
     * <p>User-defined identifier of a purchase Order.</p>
     * <p>It is typically set by the <a href="ctp:api:type:Buyer">Buyer</a> and can be used with <a href="/quotes-overview">Quotes</a> to track the purchase Order during the <a href="/../api/quotes-overview#intended-workflow">quote and order flow</a>.</p>
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
     * <p><code>id</code> of the <a href="ctp:api:type:Customer">Customer</a> that the Order belongs to.</p>
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
     * <p>Email address of the Customer that the Order belongs to.</p>
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
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Customer Group of the Customer that the Order belongs to.
     * Used for <a href="ctp:api:type:LineItemPriceSelection">LineItem Price selection</a>.</p>
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
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Order.</p>
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
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Business Unit the Order belongs to.</p>
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
     * <p><a href="ctp:api:type:Reference">Reference</a> to a Store the Order belongs to.</p>
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
     * <p><a href="ctp:api:type:LineItems">Line Items</a> that are part of the Order.</p>
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
     * <p><a href="ctp:api:type:CustomLineItems">Custom Line Items</a> that are part of the Order.</p>
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
     * <p>Sum of the <code>totalPrice</code> field of all <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>, and if available, the <code>price</code> field of <a href="ctp:api:type:ShippingInfo">ShippingInfo</a>.
     * If a discount applies on <code>totalPrice</code>, this field holds the discounted value.</p>
     * <p>Taxes are included if <a href="ctp:api:type:TaxRate">TaxRate</a> <code>includedInPrice</code> is <code>true</code> for each price.</p>
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
     * <ul>
     * <li>For <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, it is automatically set when a <a href="ctp:api:type:OrderSetShippingAddressAction">shipping address is set</a>.</li>
     * <li>For <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, it is automatically set when <code>shippingAddress</code> and external Tax Rates for all Line Items, Custom Line Items, and Shipping Methods in the Cart are set.</li>
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
     * <p>Discounts that apply on the total price of the Order.</p>
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
     * <p>Indicates how monetary values are rounded when calculating taxes for <code>taxedPrice</code>.</p>
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
     * <p>Indicates how stock quantities are tracked for Line Items in the Order.</p>
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
     * <p>Billing address associated with the Order.</p>
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
     * <p>Shipping address associated with the Order.
     * Determines eligible <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> rates and Tax Rates of Line Items.</p>
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
     * <p>Indicates whether there can be one or multiple Shipping Methods.</p>
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
     * <p><code>key</code> of the <a href="ctp:api:type:ShippingMethod">ShippingMethod</a> for <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
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
     * <p>Shipping-related information for <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Automatically set when a <a href="ctp:api:type:StagedOrderSetShippingMethodAction">Shipping Method is set</a>.</p>
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
     * <p>Custom Fields of the Shipping Method for <code>Single</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
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
     * <p>Shipping-related information for <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Updated automatically each time a new <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a>.</p>
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
     * <p>Additional shipping addresses of the Order as specified by <a href="ctp:api:type:LineItem">LineItems</a> using the <code>shippingDetails</code> field.
     * Eligible Shipping Methods or applicable Tax Rates are determined by the address in <code>shippingAddress</code>, and not <code>itemShippingAddresses</code>.</p>
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
     * <p>Discount Codes added to the Order.
     * An Order that has <code>directDiscounts</code> cannot have <code>discountCodes</code>.</p>
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
     * <p>Direct Discounts added to the Order.
     * An Order that has <code>discountCodes</code> cannot have <code>directDiscounts</code>.</p>
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
     * <p>Automatically set when a Line Item with <code>GiftLineItem</code> <a href="ctp:api:type:LineItemMode">LineItemMode</a> is <a href="ctp:api:type:StagedOrderRemoveLineItemAction">removed</a> from the Order.</p>
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
     * <p>Payment information related to the Order.</p>
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
     * <p>Used for <a href="ctp:api:type:LineItemPriceSelection">LineItem Price selection</a>.</p>
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
     * <p>Languages of the Order.
     * Can only contain languages supported by the <a href="ctp:api:type:Project">Project</a>.</p>
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
     * <p>Indicates the origin of the Cart from which the Order was created.</p>
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
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Cart for an <a href="ctp:api:endpoint:/{projectKey}/orders:POST">Order created from Cart</a>.
     * The referenced Cart will have the <code>Ordered</code> <a href="ctp:api:type:CartState">CartState</a>.</p>
     *
     *
     * @return null|CartReference
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CART);
            if (is_null($data)) {
                return null;
            }

            $this->cart = CartReferenceModel::of($data);
        }

        return $this->cart;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Quote for an <a href="ctp:api:endpoint:/{projectKey}/orders/quotes:POST">Order created from Quote</a>.</p>
     *
     *
     * @return null|QuoteReference
     */
    public function getQuote()
    {
        if (is_null($this->quote)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_QUOTE);
            if (is_null($data)) {
                return null;
            }

            $this->quote = QuoteReferenceModel::of($data);
        }

        return $this->quote;
    }

    /**
     * <p>Current status of the Order.</p>
     *
     *
     * @return null|string
     */
    public function getOrderState()
    {
        if (is_null($this->orderState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->orderState = (string) $data;
        }

        return $this->orderState;
    }

    /**
     * <p>Shipment status of the Order.</p>
     *
     *
     * @return null|string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }

    /**
     * <p>Payment status of the Order.</p>
     *
     *
     * @return null|string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentState = (string) $data;
        }

        return $this->paymentState;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the Order.
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
     * <p>Contains synchronization activity information of the Order (like export or import).
     * Can only be set with <a href="ctp:api:type:OrderUpdateSyncInfoAction">Update SyncInfo</a> update action.</p>
     *
     *
     * @return null|SyncInfoCollection
     */
    public function getSyncInfo()
    {
        if (is_null($this->syncInfo)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SYNC_INFO);
            if (is_null($data)) {
                return null;
            }
            $this->syncInfo = SyncInfoCollection::fromArray($data);
        }

        return $this->syncInfo;
    }

    /**
     * <p>Contains information regarding the returns associated with the Order.</p>
     *
     *
     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo()
    {
        if (is_null($this->returnInfo)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RETURN_INFO);
            if (is_null($data)) {
                return null;
            }
            $this->returnInfo = ReturnInfoCollection::fromArray($data);
        }

        return $this->returnInfo;
    }

    /**
     * <p>Internal-only field.</p>
     *
     * @deprecated
     * @return null|int
     */
    public function getLastMessageSequenceNumber()
    {
        if (is_null($this->lastMessageSequenceNumber)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LAST_MESSAGE_SEQUENCE_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->lastMessageSequenceNumber = (int) $data;
        }

        return $this->lastMessageSequenceNumber;
    }

    /**
     * <p>Custom Fields of the Order.</p>
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
     * <p>User-defined date and time (UTC) of the Order.
     * Present only on an Order created using <a href="ctp:api:endpoint:/{projectKey}/orders/import:POST">Order Import</a>.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCompletedAt()
    {
        if (is_null($this->completedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COMPLETED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->completedAt = $data;
        }

        return $this->completedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
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
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
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
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @param ?string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): void
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;
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
     * @param ?CartReference $cart
     */
    public function setCart(?CartReference $cart): void
    {
        $this->cart = $cart;
    }

    /**
     * @param ?QuoteReference $quote
     */
    public function setQuote(?QuoteReference $quote): void
    {
        $this->quote = $quote;
    }

    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void
    {
        $this->orderState = $orderState;
    }

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?SyncInfoCollection $syncInfo
     */
    public function setSyncInfo(?SyncInfoCollection $syncInfo): void
    {
        $this->syncInfo = $syncInfo;
    }

    /**
     * @param ?ReturnInfoCollection $returnInfo
     */
    public function setReturnInfo(?ReturnInfoCollection $returnInfo): void
    {
        $this->returnInfo = $returnInfo;
    }

    /**
     * @param ?int $lastMessageSequenceNumber
     */
    public function setLastMessageSequenceNumber(?int $lastMessageSequenceNumber): void
    {
        $this->lastMessageSequenceNumber = $lastMessageSequenceNumber;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?DateTimeImmutable $completedAt
     */
    public function setCompletedAt(?DateTimeImmutable $completedAt): void
    {
        $this->completedAt = $completedAt;
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
        if (isset($data[Order::FIELD_CREATED_AT]) && $data[Order::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Order::FIELD_CREATED_AT] = $data[Order::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Order::FIELD_LAST_MODIFIED_AT]) && $data[Order::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Order::FIELD_LAST_MODIFIED_AT] = $data[Order::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Order::FIELD_COMPLETED_AT]) && $data[Order::FIELD_COMPLETED_AT] instanceof \DateTimeImmutable) {
            $data[Order::FIELD_COMPLETED_AT] = $data[Order::FIELD_COMPLETED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
