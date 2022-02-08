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
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
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
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?string
     */
    protected $customerId;

    /**
     * @var ?string
     */
    protected $customerEmail;

    /**
     * @var ?string
     */
    protected $anonymousId;

    /**
     * @var ?StoreKeyReference
     */
    protected $store;

    /**
     * @var ?LineItemCollection
     */
    protected $lineItems;

    /**
     * @var ?CustomLineItemCollection
     */
    protected $customLineItems;

    /**
     * @var ?TypedMoney
     */
    protected $totalPrice;

    /**
     * @var ?TaxedPrice
     */
    protected $taxedPrice;

    /**
     * @var ?string
     */
    protected $cartState;

    /**
     * @var ?Address
     */
    protected $shippingAddress;

    /**
     * @var ?Address
     */
    protected $billingAddress;

    /**
     * @var ?string
     */
    protected $inventoryMode;

    /**
     * @var ?string
     */
    protected $taxMode;

    /**
     * @var ?string
     */
    protected $taxRoundingMode;

    /**
     * @var ?string
     */
    protected $taxCalculationMode;

    /**
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?ShippingInfo
     */
    protected $shippingInfo;

    /**
     * @var ?DiscountCodeInfoCollection
     */
    protected $discountCodes;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?PaymentInfo
     */
    protected $paymentInfo;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    /**
     * @var ?CartDiscountReferenceCollection
     */
    protected $refusedGifts;

    /**
     * @var ?string
     */
    protected $origin;

    /**
     * @var ?ShippingRateInput
     */
    protected $shippingRateInput;

    /**
     * @var ?AddressCollection
     */
    protected $itemShippingAddresses;

    /**
     * @var ?int
     */
    protected $totalLineItemQuantity;


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
        ?string $customerId = null,
        ?string $customerEmail = null,
        ?string $anonymousId = null,
        ?StoreKeyReference $store = null,
        ?LineItemCollection $lineItems = null,
        ?CustomLineItemCollection $customLineItems = null,
        ?TypedMoney $totalPrice = null,
        ?TaxedPrice $taxedPrice = null,
        ?string $cartState = null,
        ?Address $shippingAddress = null,
        ?Address $billingAddress = null,
        ?string $inventoryMode = null,
        ?string $taxMode = null,
        ?string $taxRoundingMode = null,
        ?string $taxCalculationMode = null,
        ?CustomerGroupReference $customerGroup = null,
        ?string $country = null,
        ?ShippingInfo $shippingInfo = null,
        ?DiscountCodeInfoCollection $discountCodes = null,
        ?CustomFields $custom = null,
        ?PaymentInfo $paymentInfo = null,
        ?string $locale = null,
        ?int $deleteDaysAfterLastModification = null,
        ?CartDiscountReferenceCollection $refusedGifts = null,
        ?string $origin = null,
        ?ShippingRateInput $shippingRateInput = null,
        ?AddressCollection $itemShippingAddresses = null,
        ?int $totalLineItemQuantity = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->key = $key;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->customerId = $customerId;
        $this->customerEmail = $customerEmail;
        $this->anonymousId = $anonymousId;
        $this->store = $store;
        $this->lineItems = $lineItems;
        $this->customLineItems = $customLineItems;
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->cartState = $cartState;
        $this->shippingAddress = $shippingAddress;
        $this->billingAddress = $billingAddress;
        $this->inventoryMode = $inventoryMode;
        $this->taxMode = $taxMode;
        $this->taxRoundingMode = $taxRoundingMode;
        $this->taxCalculationMode = $taxCalculationMode;
        $this->customerGroup = $customerGroup;
        $this->country = $country;
        $this->shippingInfo = $shippingInfo;
        $this->discountCodes = $discountCodes;
        $this->custom = $custom;
        $this->paymentInfo = $paymentInfo;
        $this->locale = $locale;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->refusedGifts = $refusedGifts;
        $this->origin = $origin;
        $this->shippingRateInput = $shippingRateInput;
        $this->itemShippingAddresses = $itemShippingAddresses;
        $this->totalLineItemQuantity = $totalLineItemQuantity;
    }

    /**
     * <p>The unique ID of the cart.</p>
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
     * <p>The current version of the cart.</p>
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
     * <p>User-specific unique identifier of the cart.</p>
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
     * <p>Present on resources updated after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
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
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
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
     * <p>Identifies carts and orders belonging to an anonymous session (the customer has not signed up/in yet).</p>
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
     * <p>The sum of all <code>totalPrice</code> fields of the <code>lineItems</code> and <code>customLineItems</code>, as well as the <code>price</code> field of <code>shippingInfo</code> (if it exists).
     * <code>totalPrice</code> may or may not include the taxes: it depends on the taxRate.includedInPrice property of each price.</p>
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

            $this->totalPrice = TypedMoneyModel::of($data);
        }

        return $this->totalPrice;
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
     * <p>The shipping address is used to determine the eligible shipping methods and rates as well as the tax rate of the line items.</p>
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
     * <p>Set automatically when the customer is set and the customer is a member of a customer group.
     * Used for product variant
     * price selection.</p>
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
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.
     * Used for product variant price selection.</p>
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
     * <p>Set automatically once the ShippingMethod is set.</p>
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
     * <p>The cart will be deleted automatically if it hasn't been modified for the specified amount of days and it is in the <code>Active</code> CartState.</p>
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
     * <p>Automatically filled when a line item with LineItemMode <code>GiftLineItem</code> is removed from the cart.</p>
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
     * <p>The origin field indicates how this cart was created.
     * The value <code>Customer</code> indicates, that the cart was created by the customer.</p>
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
     * <p>The shippingRateInput is used as an input to select a ShippingRatePriceTier.</p>
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

            $this->shippingRateInput = ShippingRateInputModel::of($data);
        }

        return $this->shippingRateInput;
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
     * <p>The sum off all the <a href="ctp:api:type:LineItem">Line Items</a> quantities. Does not take <a href="ctp:api:type:CustomLineItem">Custom Line Items</a> into consideration.</p>
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
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
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
     * @param ?string $cartState
     */
    public function setCartState(?string $cartState): void
    {
        $this->cartState = $cartState;
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
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
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
     * @param ?DiscountCodeInfoCollection $discountCodes
     */
    public function setDiscountCodes(?DiscountCodeInfoCollection $discountCodes): void
    {
        $this->discountCodes = $discountCodes;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?PaymentInfo $paymentInfo
     */
    public function setPaymentInfo(?PaymentInfo $paymentInfo): void
    {
        $this->paymentInfo = $paymentInfo;
    }

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    /**
     * @param ?CartDiscountReferenceCollection $refusedGifts
     */
    public function setRefusedGifts(?CartDiscountReferenceCollection $refusedGifts): void
    {
        $this->refusedGifts = $refusedGifts;
    }

    /**
     * @param ?string $origin
     */
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
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
     * @param ?int $totalLineItemQuantity
     */
    public function setTotalLineItemQuantity(?int $totalLineItemQuantity): void
    {
        $this->totalLineItemQuantity = $totalLineItemQuantity;
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
